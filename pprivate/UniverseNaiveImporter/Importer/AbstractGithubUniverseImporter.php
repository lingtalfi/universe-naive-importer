<?php


namespace UniverseNaiveImporter\Importer;


abstract class AbstractGithubUniverseImporter implements UniverseImporterInterface
{

    private $githubRepoName;


    public function __construct()
    {
        $this->githubRepoName = $this->getGithubRepositoryName();
    }

    public static function create()
    {
        return new static();
    }

    public function canImport($planetName)
    {
        return array_key_exists($planetName, $this->getDependencyMap());
    }


    public function import($planetName, $planetsDir)
    {
        $output = [];
        $returnVar = 0;
        $cmd = 'cd "' . $planetsDir . '"; git clone https://github.com/' . $this->githubRepoName . '/' . $planetName . '.git';
        exec($cmd, $output, $returnVar);

        if (0 === $returnVar) {
            return true;
        } else {
            return false;
        }
    }

    public function getAvailablePlanets()
    {
        $ret = [];
        $dependencyMap = $this->getDependencyMap();
        foreach ($dependencyMap as $planet => $deps) {
            $description = $this->getDescription($planet);
            $ret[] = [
                $planet,
                $description,
            ];
        }
        return $ret;
    }

    public function getDependencyTree($planetName)
    {
        $tree = [];
        $this->collectDependencyTree($planetName, $tree);
        $tree = array_unique($tree);
        return $tree;
    }



    //--------------------------------------------
    // OVERRIDE THOSE METHODS
    //--------------------------------------------
    protected function getDependencyMap()
    {
        return [];
    }

    protected function getDescription($planet)
    {
        return "";
    }

    protected function getGithubRepositoryName()
    {
        throw new \Exception("Override this method");
    }




    //--------------------------------------------
    //
    //--------------------------------------------
    private function collectDependencyTree($planets, array &$tree)
    {
        $dependencyMap = $this->getDependencyMap();
        if (is_string($planets)) {
            $moduleName = $planets;
            $tree[] = $moduleName;
            if (array_key_exists($moduleName, $dependencyMap)) {
                $deps = $dependencyMap[$moduleName];
                foreach ($deps as $dep) {
                    if (!in_array($dep, $tree, true)) {
                        $this->collectDependencyTree($dep, $tree);
                    }
                }
            }
        } elseif (is_array($planets)) {
            foreach ($planets as $moduleName) {
                $this->collectDependencyTree($moduleName, $tree);
            }
        }
    }
}