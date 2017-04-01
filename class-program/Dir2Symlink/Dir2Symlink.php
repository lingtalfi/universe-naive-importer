<?php


namespace Dir2Symlink;


use Bat\FileSystemTool;
use Dir2Symlink\Exception\Dir2SymlinkException;


class Dir2Symlink
{

    public static function create()
    {
        return new static();
    }

    /**
     * Converts the top directories of the $targetDir to symlinks referencing the $sourceDir equivalent top directories (if exist)
     * @return bool, true if EVERY item in the targetDir could be converted successfully
     */
    public function toSymlinks($sourceDir, $targetDir)
    {
        return $this->convert("symlink", $sourceDir, $targetDir);
    }

    /**
     * Converts the symlinks at the top level of the $targetDir to directories copied from the $sourceDir equivalent top directories (if exist)
     * @return bool, true if EVERY item in the targetDir could be converted successfully
     */
    public function toDirectories($sourceDir, $targetDir)
    {
        return $this->convert("dir", $sourceDir, $targetDir);
    }


    private function convert($mode, $sourceDir, $targetDir)
    {
        $ret = true;
        if (file_exists($targetDir)) {
            if (file_exists($sourceDir)) {


                $dirs = $this->getDirectories($targetDir);


                foreach ($dirs as $dir) {


                    $targetEntry = $targetDir . "/$dir";
                    $sourceEntry = $sourceDir . "/$dir";

                    if (is_dir($sourceEntry)) {


                        // remove old files (yes, it's risky)
                        if (file_exists($targetEntry)) {
                            if (is_link($targetEntry)) {
                                unlink($targetEntry);
                            } else {
                                FileSystemTool::remove($targetEntry);
                            }
                        }


                        if ('symlink' === $mode) {
                            symlink($sourceEntry, $targetEntry);
                        } else { // dir
                            FileSystemTool::copyDir($sourceEntry, $targetEntry);
                        }
                    }
                }
            } else {
                $this->error("sourceDirectoryNotFound", $sourceDir);
                $ret = false;
            }

        } else {
            $this->error("targetDirectoryNotFound", $targetDir);
            $ret = false;
        }
        return $ret;
    }

    //--------------------------------------------
    //
    //--------------------------------------------
    protected function error($type, $param = null)
    {
        $msg = "";
        $level = "error";
        switch ($type) {
            case 'sourceDirectoryNotFound':
                $msg = "source directory doesn't exist: $param";
                $level = "error";
                break;
            case 'targetDirectoryNotFound':
                $msg = "target directory doesn't exist: $param";
                $level = "error";
                break;
            default:
                break;
        }
        $this->writeError($level, $msg);
    }


    protected function writeError($type, $msg)
    {
        if ("error" === $type) {
            throw new Dir2SymlinkException($msg);
        } else {
            // warn
            trigger_error($msg, \E_USER_WARNING);
        }
    }

    //--------------------------------------------
    //
    //--------------------------------------------
    private function getDirectories($dir)
    {

        $files = scandir($dir);
        return array_filter($files, function ($v) use ($dir) {
            if ('.' === $v || '..' === $v) {
                return false;
            }
            return true;
        });
    }
}