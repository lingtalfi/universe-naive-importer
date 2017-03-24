<?php


namespace Tools;


use Bat\FileSystemTool;
use Output\ProgramOutputInterface;

class CleanerTool
{
    /**
     * @var ProgramOutputInterface $output
     */
    private $filesToBeCleaned;
    private $dirsToBeCleaned;
    private $useSymlinks;

    public function __construct()
    {
        $this->filesToBeCleaned = [
            '.gitignore',
            '.DS_Store',
        ];
        $this->dirsToBeCleaned = [
            '.idea',
            '.git',
        ];
        $this->useSymlinks = false;
    }

    public static function create()
    {
        return new static();
    }

    public function setFilesToBeCleaned($filesToBeCleaned)
    {
        $this->filesToBeCleaned = $filesToBeCleaned;
        return $this;
    }

    public function setDirsToBeCleaned($dirsToBeCleaned)
    {
        $this->dirsToBeCleaned = $dirsToBeCleaned;
        return $this;
    }


    public function clean($targetDir, $recursive = false)
    {
        if (file_exists($targetDir)) {

            $items = $this->getPlanetNames($targetDir);
            foreach ($items as $item) {
                $d = $targetDir . "/" . $item;
                $this->cleanDir($d, $recursive);
            }
        } else {
            throw new \RuntimeException("target directory does not exist: $targetDir");
        }
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    private function cleanDir($dir, $recursive = false)
    {
        if (false === $this->useSymlinks && is_link($dir)) {
            return;
        }
        foreach ($this->filesToBeCleaned as $_f) {
            $f = $dir . "/$_f";
            if (file_exists($f)) {
                if (false === $this->useSymlinks && is_link($f)) {
                    continue;
                }
                unlink($f);
            }
        }
        foreach ($this->dirsToBeCleaned as $_f) {
            $f = $dir . "/$_f";
            if (is_dir($f)) {
                if (false === $this->useSymlinks && is_link($f)) {
                    continue;
                }
                FileSystemTool::remove($f);
            }
        }

        if (true === $recursive) {
            $files = scandir($dir);
            foreach ($files as $f) {
                if ('.' !== $f && '..' !== $f) {
                    $file = $dir . "/" . $f;
                    if (is_dir($file)) {
                        if (false === $this->useSymlinks && is_link($file)) {
                            continue;
                        }
                        $this->cleanDir($file, $recursive);
                    }
                }
            }
        }
    }



    //--------------------------------------------
    //
    //--------------------------------------------
    private function getPlanetNames($planetsDir)
    {

        $files = scandir($planetsDir);
        return array_filter($files, function ($v) use ($planetsDir) {
            if (false !== strpos($v, '.')) {
                return false;
            }
            return is_dir($planetsDir . "/" . $v);
        });
    }
}