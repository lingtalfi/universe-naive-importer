<?php


namespace UniverseNaiveImporter;


use Bat\FileSystemTool;
use Output\ProgramOutputInterface;
use UniverseNaiveImporter\Exception\UniverseNaiveImporterException;
use UniverseNaiveImporter\Importer\UniverseImporterInterface;

class UniverseNaiveImporter
{

    /**
     * @var ProgramOutputInterface $output
     */
    private $output;

    /**
     * Safe mode: bool=true
     * In safe mode, all decisions that can potentially do irreversible damage
     * are not taken automatically, but rather delegated to the user.
     *
     * If safe mode is false, all decisions are taken automatically so that the process
     * can finish.
     *
     */
    private $safeMode;
    private $importers;


    public function __construct()
    {
        $this->importers = [];
        $this->safeMode = true;
    }


    public static function create()
    {
        return new static();
    }

    public function setSafeMode($safeMode)
    {
        $this->safeMode = $safeMode;
        return $this;
    }


    public function setOutput(ProgramOutputInterface $output)
    {
        $this->output = $output;
        return $this;
    }

    public function addImporter(UniverseImporterInterface $importer)
    {
        $this->importers[] = $importer;
        return $this;
    }


    /**
     *
     * Returns the list of available planets, grouped by universe.
     *
     * The returned array looks like this:
     *
     * - universeName:
     *      - 0:
     *          - 0: name: string, the name of the planet
     *          - 1: description: string, the description of the planet
     *      - ...
     * - ...
     *
     *
     * Params
     * -------------
     * search:
     *      if null, list all available planets
     * searchOptions:
     *      - universe: string=null, restrict the search to a given universe
     *      - description: bool=false, also searches in the description (by default it only looks up the planet names)
     *
     *
     */
    public function search($search = null, array $searchOptions = null)
    {
        if (null === $searchOptions) {
            $searchOptions = [];
        }
        $searchOptions = array_merge([
            'universe' => null,
            'description' => false,
        ], $searchOptions);
        $universe = $searchOptions['universe'];
        $description = $searchOptions['description'];


        $ret = [];
        foreach ($this->importers as $importer) {

            /**
             * @var UniverseImporterInterface $importer
             */
            $importerUniverse = $importer->getUniverse();
            // universe matches?
            if ($universe !== null && $importerUniverse !== $universe) {
                continue;
            }


            // planets match?
            $planets = $importer->getAvailablePlanets();
            foreach ($planets as $planet) {
                list($name, $desc) = $planet;

                if (
                    null === $search ||
                    false !== mb_stripos($name, $search) ||
                    (true === $description && false !== mb_stripos($desc, $search))
                ) {
                    $ret[$importerUniverse][] = $planet;
                }
            }
        }
        return $ret;
    }

    /**
     * @return array, list of all available full planet names
     */
    public function getAllPlanets($universe = null)
    {
        $ret = [];
        foreach ($this->importers as $importer) {
            /**
             * @var UniverseImporterInterface $importer
             */
            $planets = $importer->getAvailablePlanets();
            $importerUniverse = $importer->getUniverse();
            if (null === $universe || $universe === $importerUniverse) {
                foreach ($planets as $planet) {
                    list($name, $desc) = $planet;
                    $fullPlanetName = $importerUniverse . "." . $name;
                    $ret[] = $fullPlanetName;
                }
            }
        }
        return $ret;
    }

    /**
     * Import one or more planet.
     *
     *
     *
     * planets: the full planet name, or an array of full planet names.
     *              - fullPlanetName: (<universe> <.>) <planetName>
     * force:
     *      if false, skip the planet if it already exists
     *      if true, remove the planet and re-import it
     *
     * localUniverse:
     *      if null, will use the importer to import
     *      if set to the local universe path's planetsDir, will try to create symlinks to this local universe
     *
     *
     */
    public function import($planetsDir, $planets, $force = false, $localUniverse = null)
    {
        $prefix = $this->getPrefix();
        $output = $this->output;
        if (!is_array($planets)) {
            $planets = [$planets];
        }

        // list all planets and dependencies
        // if force, remove all planets
        // import all planets one by one


        // list all planets and dependencies, array of planet => oImporter
        $planet2Importers = $this->getPlanet2Importers($planets);

        // if force, remove all planets
        if (true === $force) {
            foreach ($planet2Importers as $planet => $importer) {
                $planetDir = $planetsDir . "/" . $planet;
                if (is_link($planetDir)) {
                    unlink($planetDir);
                } elseif (is_dir($planetDir)) {
                    FileSystemTool::remove($planetDir);
                }
            }
        }


        // import all planets one by one
        foreach ($planet2Importers as $planet => $importer) {
            /**
             * @var UniverseImporterInterface $importer
             */
            $planetDir = $planetsDir . "/" . $planet;
            if (is_dir($planetDir)) {
                $output->success($prefix . "Planet $planet already imported");
            } else {
                // it will skip if the planet already exist
                if (null === $localUniverse) {
                    $importer->import($planet, $planetsDir);
                    $output->success($prefix . "Planet $planet imported");
                } else {
                    if (is_dir($localUniverse)) {
                        $localPlanetDir = $localUniverse . "/" . $planet;
                        $planetDir = $planetsDir . "/" . $planet;
                        if (is_dir($localPlanetDir)) {
                            if (true === symlink($localPlanetDir, $planetDir)) {
                                $output->success($prefix . "Planet $planet symlinked from local repository");
                            } else {
                                $output->error($prefix . "Cannot create symlink for planet $planet, try with the -f flag");
                            }
                        } else {
                            $output->error("Planet $planet not found in local repository ($localUniverse)");
                        }
                    } else {
                        throw new UniverseNaiveImporterException("directory does not exist: $localUniverse");
                    }
                }
            }
        }
    }

    public function bigbangify($planetsDir)
    {

        $bigbangString = <<<'BIGBANG'
<?php



//------------------------------------------------------------------------------/
// THIS IS BIG BANG SCRIPT, from whence the universe can be used
//------------------------------------------------------------------------------/
use BumbleBee\Autoload\ButineurAutoloader;


require_once __DIR__ . '/BumbleBee/Autoload/BeeAutoloader.php';
require_once __DIR__ . '/BumbleBee/Autoload/ButineurAutoloader.php';



if (!isset($__butineurStart)) {
    $__butineurStart = true;
}

ButineurAutoloader::getInst()
    ->addLocation(__DIR__);
// ->addLocation(__DIR__ . "/myclasses") // we could use multiple directories if needed
//
//
if (true === $__butineurStart) {
    ButineurAutoloader::getInst()->start();
}

//------------------------------------------------------------------------------/
// BONUS FUNCTIONS, SO HANDFUL... (a huge time saver in the end)
//------------------------------------------------------------------------------/
if (!function_exists('a')) {
    function a()
    {
        foreach (func_get_args() as $arg) {
            ob_start();
            var_dump($arg);
            $output = ob_get_clean();
            if ('1' !== ini_get('xdebug.default_enable')) {
                $output = preg_replace("!\]\=\>\n(\s+)!m", "] => ", $output);
            }
            if ('cli' === PHP_SAPI) {
                echo $output;
            }
            else {
                echo '<pre>' . $output . '</pre>';
            }
        }
    }
    function az()
    {
        call_user_func_array('a', func_get_args());
        exit;
    }
}
BIGBANG;


        $bigbangFile = $planetsDir . "/bigbang.php";

        $prefix = $this->getPrefix();
        $force = false;
        $output = $this->output;
        if (file_exists($bigbangFile) && false === $force) {
            $output->success($prefix . 'Bigbang script is already in place');
        } else {
            if (false !== file_put_contents($bigbangFile, $bigbangString)) {
                $output->success($prefix . 'Bigbang script has been created successfully');
            } else {
                $output->error($prefix . "Bigbang script couldn't be created");
            }
        }
    }

    //--------------------------------------------
    //
    //--------------------------------------------
    private function getPlanet2Importers(array $planets)
    {
        $ret = [];
        foreach ($planets as $planet) {
            $universe = null;
            $p = explode('.', $planet, 2);
            if (2 === count($p)) {
                $universe = $p[0];
                $planet = $p[1];
            }
            $importerFound = false;

            // find the planet's importer
            foreach ($this->importers as $importer) {

                /**
                 * @var UniverseImporterInterface $importer
                 */
                $importerUniverse = $importer->getUniverse();
                // universe matches?
                if ($universe !== null && $importerUniverse !== $universe) {
                    continue;
                }
                if (true === $importer->canImport($planet)) {
                    $importerFound = true;
                    $ret[$planet] = $importer;
                }
            }

            if (false === $importerFound) {
                $msg = "No importer can import planet $planet";
                if (true === $this->safeMode) {
                    throw new UniverseNaiveImporterException($msg);
                } else {
                    $this->output->error($this->getPrefix() . $msg);
                }
            }
        }
        return $ret;
    }

    private function getPrefix()
    {
        return '* ';
    }
}