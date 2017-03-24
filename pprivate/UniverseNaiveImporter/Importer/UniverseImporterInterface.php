<?php


namespace UniverseNaiveImporter\Importer;

/**
 *
 * An universe importer can import all planets and dependencies of a given universe.
 *
 */
interface UniverseImporterInterface
{

    public function getName();


    public function canImport($planetName);

    public function getUniverse();

    /**
     * Import the given planet to the planets directory.
     * If the directory already exists, it does nothing.
     */
    public function import($planetName, $planetsDir);


    /**
     * @return array of items.
     * Each item is an array with three entries:
     *      - 0: the planet name
     *      - 1: the description of the planet
     */
    public function getAvailablePlanets();


    /**
     * @return array of flattened (cycling references resolved) dependencies for the given planet;
     * the dependency tree includes the given planetName itself.
     *
     * The order is not considered important.
     */
    public function getDependencyTree($planetName);
}