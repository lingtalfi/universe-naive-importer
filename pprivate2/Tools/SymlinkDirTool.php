<?php


namespace Tools;


use Bat\FileSystemTool;
use ProgramPrinter\ProgramPrinter;
use ProgramPrinter\ProgramPrinterInterface;

class SymlinkDirTool
{
    private $printer;

    public static function create()
    {
        return new static();
    }


    public function setPrinter(ProgramPrinterInterface $printer)
    {
        $this->printer = $printer;
        return $this;
    }


    public function convert($mode, $targetPlanetsDir, $localUniversePlanetsDir)
    {
        $printer = $this->getPrinter();
        if (file_exists($targetPlanetsDir)) {
            if (file_exists($localUniversePlanetsDir)) {


                $planets = $this->getPlanetNames($targetPlanetsDir);


                foreach ($planets as $planet) {


                    $oldFile = $targetPlanetsDir . "/$planet";
                    $sourcePlanetDir = $localUniversePlanetsDir . "/$planet";
                    if (is_dir($sourcePlanetDir)) {


                        // remove old files (yes, it's risky)
                        if (file_exists($oldFile)) {
                            if (is_link($oldFile)) {
                                unlink($oldFile);
                            } else {
                                FileSystemTool::remove($oldFile);
                            }
                        }


                        if ('symlink' === $mode) {
                            symlink($sourcePlanetDir, $oldFile);
                        } else { // dir
                            FileSystemTool::copyDir($sourcePlanetDir, $oldFile);
                        }
                    } else {
                        $printer->warn("local universe's planet directory does not exist: $sourcePlanetDir. No action was taken for that planet");
                    }
                }
            } else {
                $printer->error("local universe's planets directory does not exist: $localUniversePlanetsDir");
            }

        } else {
            $printer->error("target planets directory does not exist: $targetPlanetsDir");
        }
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    private function getPlanetNames($planetsDir)
    {

        $files = scandir($planetsDir);
        return array_filter($files, function ($v) {
            if (false !== strpos($v, '.')) {
                return false;
            }
            return true;
        });
    }

    private function getPrinter()
    {
        if (null === $this->printer) {
            $this->printer = ProgramPrinter::create();
        }
        return $this->printer;
    }
}