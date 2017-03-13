<?php


namespace UniverseNaiveImporter;


use UniverseNaiveImporter\Exception\UniverseNaiveImporterException;
use UniverseNaiveImporter\Importer\UniverseImporterInterface;
use UniverseNaiveImporter\ImportSummary\ImportSummary;
use UniverseNaiveImporter\ImportSummary\ImportSummaryInterface;

/**
 * This is the naive importer for the universe framework.
 * It is naive because it doesn't try to deal with version numbers (when importing a planet),
 * it just uses the latest version available.
 *
 *
 * What you can do with this class is:
 *
 *
 * - import planet(s)
 * - list available planets
 *
 *
 *
 */
class UniverseNaiveImporter
{


    private $appDir;
    private $planetsRelativePath;
    /**
     *
     * By default, the value is false, which means that the import is skipped
     * if the planet is already there.
     * However, sometimes you want to upgrade from an older to a new version for a given planet.
     * In that case, you can put this flag to true; it will upgrade every planet and dependencies.
     *
     * bool,
     */
    private $_forceImport;


    /**
     * @var UniverseImporterInterface[]
     */
    private $importers;


    public function __construct()
    {
        $this->planetsRelativePath = "class-planets";
        $this->importers = [];
        $this->_forceImport = false;
    }

    public static function create()
    {
        return new static();
    }

    public function setAppDir($appDir)
    {
        $this->appDir = $appDir;
        return $this;
    }

    public function setPlanetsRelativePath($planetsRelativePath)
    {
        $this->planetsRelativePath = $planetsRelativePath;
        return $this;
    }

    public function addImporter(UniverseImporterInterface $importer)
    {
        $this->importers[] = $importer;
        return $this;
    }

    public function forceImport($forceImport)
    {
        $this->_forceImport = $forceImport;
        return $this;
    }


    /**
     * Import a planet and its dependencies.
     * Returns a boolean indicating whether or not the planet was successfully imported.
     *
     *
     *
     * Universe is passed to avoid ambiguity, in case multiple planets have the same name.
     *
     * @return ImportSummaryInterface
     */
    public function import($planets, $universe = null)
    {
        if (null === $this->appDir) {
            throw new UniverseNaiveImporterException("appDir not set");
        }


        $planetsDir = $this->appDir . "/" . $this->planetsRelativePath;

        if (is_array($planets)) {

            $all = [];
            foreach ($this->importers as $importer) {
                $importer->forceImport($this->_forceImport);


                $className = get_class($importer);

                $all[$className]["instance"] = $importer;
                foreach ($planets as $planetName) {
                    if (true === $importer->canImport($planetName, $universe)) {
                        $all[$className]["planets"][] = $planetName;
                        continue;
                    }
                }
            }


            $uber = [
                'successful' => true,
                'reinstalledPlanets' => [],
                'alreadyInstalledPlanets' => [],
                'uninstalledPlanets' => [],
            ];
            foreach ($all as $className => $info) {
                /**
                 * @var UniverseImporterInterface $importer
                 */
                $importer = $info['instance'];
                $planets = $info['planets'];
                $summary = $importer->import($planetsDir, $planets);
                if (false === $summary->isSuccessful()) {
                    $uber['successful'] = false;
                }
                $uber['reinstalledPlanets'] = array_merge($uber['reinstalledPlanets'], $summary->getReinstalledPlanets());
                $uber['alreadyInstalledPlanets'] = array_merge($uber['alreadyInstalledPlanets'], $summary->getAlreadyInstalledPlanets());
                $uber['uninstalledPlanets'] = array_merge($uber['uninstalledPlanets'], $summary->getUninstalledPlanets());
            }

            $o = new ImportSummary();
            $o->setSuccessful($uber['successful']);
            $o->setReinstalledPlanets($uber['reinstalledPlanets']);
            $o->setAlreadyInstalledPlanets($uber['alreadyInstalledPlanets']);
            $o->setUninstalledPlanets($uber['uninstalledPlanets']);
            return $o;

        } elseif (is_string($planets)) {
            $planetName = $planets;
            foreach ($this->importers as $importer) {
                $importer->forceImport($this->_forceImport);
                if (true === $importer->canImport($planetName, $universe)) {
                    $summary = $importer->import($planetsDir, $planetName, $universe);
                    return $summary;
                }
            }
            $summary = ImportSummary::create();
            $summary->setSuccessful(false);
            $summary->setUninstalledPlanets([$planetName]);
            return $summary;
        }
    }


    public function listPlanets($universe = null)
    {
        foreach ($this->importers as $importer) {

            $planets = $importer->getAvailablePlanets($universe);
            if (count($planets) > 0) {
                echo "Importer " . $importer->getName() . ":" . PHP_EOL;
                foreach ($planets as $info) {
                    echo "- " . $info[0] . " (" . $info[1] . ")" . PHP_EOL;
                }
            }
        }
    }

}