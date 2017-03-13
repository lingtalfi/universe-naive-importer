<?php


namespace UniverseNaiveImporter\Importer;


use UniverseNaiveImporter\UniverseNaiveImporter;

interface UniverseNaiveImporterAwareImporterInterface
{

    public function setUniverseNaiveImporter(UniverseNaiveImporter $uni);
}