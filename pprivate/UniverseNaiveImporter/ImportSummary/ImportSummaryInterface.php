<?php


namespace UniverseNaiveImporter\ImportSummary;


interface ImportSummaryInterface
{

    public function isSuccessful();

    /**
     * Planets which have actually been replaced (overwritten)
     */
    public function getReinstalledPlanets();

    public function getAlreadyInstalledPlanets();


    public function getUninstalledPlanets();
}