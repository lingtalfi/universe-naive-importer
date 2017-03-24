<?php


namespace UniverseNaiveImporter\ImportSummary;


class ImportSummary implements ImportSummaryInterface
{
    private $successful;
    private $reinstalledPlanets;
    private $alreadyInstalledPlanets;
    private $uninstalledPlanets;


    public function __construct()
    {
        $this->reinstalledPlanets = [];
        $this->uninstalledPlanets = [];
        $this->alreadyInstalledPlanets = [];
        $this->successful = false;
    }

    public static function create()
    {
        return new static();
    }


    public function isSuccessful()
    {
        return $this->successful;
    }

    /**
     * Planets which have actually been replaced (overwritten)
     */
    public function getReinstalledPlanets()
    {
        return $this->reinstalledPlanets;
    }


    public function getUninstalledPlanets()
    {
        return $this->uninstalledPlanets;
    }

    public function getAlreadyInstalledPlanets()
    {
        return $this->alreadyInstalledPlanets;
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    public function setSuccessful($successful)
    {
        $this->successful = $successful;
        return $this;
    }

    public function setReinstalledPlanets(array $reinstalledPlanets)
    {
        $this->reinstalledPlanets = $reinstalledPlanets;
        return $this;
    }

    public function setUninstalledPlanets(array $uninstalledPlanets)
    {
        $this->uninstalledPlanets = $uninstalledPlanets;
        return $this;
    }

    public function setAlreadyInstalledPlanets(array $alreadyInstalledPlanets)
    {
        $this->alreadyInstalledPlanets = $alreadyInstalledPlanets;
        return $this;
    }

    //--------------------------------------------
    //
    //--------------------------------------------
    public function addAlreadyInstalledPlanet($planet)
    {
        $this->alreadyInstalledPlanets[] = $planet;
        return $this;
    }

    public function addUninstalledPlanet($planet)
    {
        $this->uninstalledPlanets[] = $planet;
        return $this;
    }

    public function addReinstalledPlanet($planet)
    {
        $this->reinstalledPlanets[] = $planet;
        return $this;
    }


}