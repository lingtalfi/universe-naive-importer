<?php


namespace UniverseNaiveImporter\Importer;


use UniverseNaiveImporter\ImportSummary\ImportSummaryInterface;

interface UniverseImporterInterface
{

    public function canImport($planetName, $universe = null);

    /**
     * See UniverseNaiveImporter.forceImport documentation
     */
    public function forceImport($forceImport);

    /**
     * Import the given planet(s) to the planets directory.
     * $planets can be a string or an array
     *
     * It overwrites existing planets if forceImport option is set to true
     *
     * @return ImportSummaryInterface
     */
    public function import($planetsDir, $planets);

    public function getName();

    /**
     * @return array of items.
     * Each item is an array with two entries:
     *      - 0: the planet name
     *      - 1: the universe name
     */
    public function getAvailablePlanets($universe = null);
}