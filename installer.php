#!/usr/bin/env php
<?php


/**
 * temp_file=$(mktemp); curl -fsSL https://raw.githubusercontent.com/lingtalfi/universe-naive-importer/master/installer.php > $temp_file; sudo php -f $temp_file;
 */


/**
 *
 * Notes:
 *
 * - mac: you shouldn't need sudo (I didn't on macOS Sierra 10.12.6)
 * - linux: you should need sudo (I did on Ubuntu 16.04 xenial)
 * - windows: sorry, no support
 *
 *
 *
 * Install procedure:
 *
 *
 * - define the os
 * - depending on the os, define:
 *      - uni_target_dir: the directory where we wish to copy the skeleton directory into (see skeleton section for more info)
 *      - uni_program_path: the desired location of the uni program
 *
 * - check whether uni_target_dir's parent is writable, if not fail(cannot create the directory $xx (directory dir($xx) not writable). Consider running this command again with higher privileges.).
 * - check whether uni_program_path's parent is writable, if not fail(cannot create the file $xx (directory dir($xx) not writable). Consider running this command again with higher privileges.).
 *
 *
 *
 * On Mac
 * ----------
 * - uni_target_dir: /usr/local/etc/uni
 * - uni_program_path: /usr/local/bin/uni
 *
 *
 *
 *
 *
 * Skeleton
 * --------------
 * The uni_target_dir structure will be:
 *
 * ```txt
 * - uni_target_dir
 * ----- Uni2 (the Uni2 planet)
 * ```
 *
 *
 *
 */


function msg($msg, $color, $indent = 0, $br = true)
{
    $s = '';
    if ($indent) {
        $s = str_repeat(' ', $indent * 2) . '- ';
    }
    $s .= "\033[$color" . "m" . $msg . "\033[0m";
    if (true === $br) {
        $s .= PHP_EOL;
    }
    return $s;
}

function success($msg, $indent = 0, $br = true)
{
    return msg($msg, "32", $indent, $br);
}

function error($msg, $indent = 0, $br = true)
{
    return msg($msg, "31", $indent, $br);
}

function info($msg, $indent = 0, $br = true)
{
    /**
     * black, because then we can insert inline bold/path inside of it.
     * Otherwise the bold/path tags define the stop tag which breaks all the formatting, including the info formatting.
     * But if it's black, the user won't notice.
     */
    return msg($msg, "30", $indent, $br);
}

function notice($msg, $indent = 0, $br = true)
{
    return msg($msg, "34", $indent, $br);
}


function warning($msg, $indent = 0, $br = true)
{
    return msg($msg, "35", $indent, $br);
}

function bold($msg)
{
    return "\033[1m" . $msg . "\033[0m";
}


function path($msg)
{
    /**
     * magenta, because more contrast with black.
     */
    return "\033[35m" . $msg . "\033[0m";
}


function checkWritableDir($dir)
{
    if (is_dir($dir)) {
        if (is_writable($dir)) {
            return true;
        } else {
            echo error("The directory " . bold($dir) . " is not writable. Consider running the command again with higher privileges.");
        }
    } else {
        echo error("Bad assertion: the directory " . bold($dir) . " does not exist.");
    }
    return false;
}


function hasProgram($program)
{
    ob_start();
    $cmd = 'which ' . $program;
    passthru($cmd);
    $programPath = trim(ob_get_clean());
    return ('' !== $programPath);
}


function download($url, $file)
{


    $useCurl = hasProgram('curl');
    $useWget = hasProgram('wget');
    /**
     * Switch between curl/wget, depending on what the machine has.
     */

    if (true === $useWget) {
        $cmd = 'wget ' . $url . ' -O "' . $file . '" -q';
        $return = 0;
        $output = [];
        exec($cmd, $output, $return);
        return (0 === $return);

    } elseif (true === $useCurl) {

        /**
         * Personal notes:
         * from my computer (mac), the curl command went to a bug that I couldn't fix yet because it disappeared magically when I
         * used the verbose flag.
         * But it's there, and it has to do with open_ssl.
         * More on this next time I see it...
         */
        if (true === IS_VERBOSE) {
            $cmd = 'curl -Lv ' . $url . ' --output "' . $file . '"';
        } else {
            $cmd = 'curl -Ls ' . $url . ' --output "' . $file . '"';
        }
//    echo $cmd . PHP_EOL;
        $return = 0;
        $output = [];
        exec($cmd, $output, $return);
        return (0 === $return);
    } else {
        return false;
    }
}

function unzip($zipFile, $targetDir)
{

    if (class_exists("\ZipArchive")) {
        $zip = new \ZipArchive();
        $res = $zip->open($zipFile);
        if ($res === true) {
            // extract it to the path we determined above
            $zip->extractTo($targetDir);
            $zip->close();
            return true;
        }
    } else {
        ob_start();
        passthru('which unzip');
        $unzipPath = trim(ob_get_clean());

        if ("" !== $unzipPath) {
            $cmd = '"' . $unzipPath . '" -qq -o "' . $zipFile . '" -d "' . $targetDir . '"';
            $output = [];
            $returnVar = 0;
            exec($cmd, $output, $returnVar);
            return (0 === $returnVar);
        }

    }
    return false;
}


function getCmdOutput($cmd)
{
    ob_start();
    passthru($cmd);
    return trim(ob_get_clean());
}


function execCmd($cmd)
{
    $output = [];
    $returnVar = 0;
    exec($cmd, $output, $returnVar);
    return (0 === $returnVar);
}


$arguments = [];
if (array_key_exists('argv', $_SERVER) && is_array($_SERVER['argv'])) {
    $arguments = $_SERVER['argv'];
    array_shift($arguments);
}
if (in_array('-v', $arguments, true)) {
    define("IS_VERBOSE", true);
} else {
    define("IS_VERBOSE", false);
}


$uniToolUrl = "https://github.com/lingtalfi/universe-naive-importer/archive/master.zip"; // will extract as universe-naive-importer-master

$tmpDir = rtrim(sys_get_temp_dir(), '/') . "/uni-tools-tmp";
@mkdir($tmpDir, 0777, true);


//--------------------------------------------
// FIRST TRY TO GET THE TYPE OF MACHINE (Mac, Linux, Windows, Unknown)
//--------------------------------------------
$phpOs = PHP_OS;


/**
 * I believe that /usr/local is reliable...
 * https://refspecs.linuxfoundation.org/FHS_3.0/fhs/ch04s09.html
 */
if (is_dir('/usr/local')) {


    //--------------------------------------------
    // GET USER AND GROUP
    //--------------------------------------------
    // https://stackoverflow.com/questions/4598001/how-do-you-find-the-original-user-through-multiple-sudo-and-su-commands
    $userName = getCmdOutput('logname');


    if (false === "use user group") {
        $sGroups = getCmdOutput('groups ' . $userName);
        $groups = explode(' ', $sGroups);

        $userGroup = "";
        if ('Darwin' === $phpOs && in_array('staff', $groups, true)) {
            $userGroup = "staff";
        } elseif (in_array($userName, $groups, true)) {
            $userGroup = $userName;
        } else {
            $userGroup = array_shift($groups);
        }

        if ('' !== $userGroup) {
        } else {
            echo error("Cannot find the user group for user $userName.");
        }
    }


    echo info('Installing ' . bold('uni-tool') . ' on ' . $phpOs . ' os...');
    $uniTargetDir = "/usr/local/etc/uni";
    $uniProgramDstPath = "/usr/local/bin/uni";

    if (true === checkWritableDir(dirname($uniTargetDir))) {
//        @mkdir($uniTargetDir, 0777, true);

        $uniToolZip = $tmpDir . '/master.zip';


        echo info('Downloading uni-tool from github.com...', 1, false);


        if (true === download($uniToolUrl, $uniToolZip)) {
            echo success('ok');


            echo info('Extracting ' . path($uniToolZip) . "...", 1, false);


            if (unzip($uniToolZip, $tmpDir)) {
                echo success('ok');


                $uni2ExtractedDir = $tmpDir . '/universe-naive-importer-master/uni';
                $uni2DestDir = $uniTargetDir;
                echo info('Moving ' . path($uni2ExtractedDir) . ' to ' . path($uni2DestDir) . '...', 1, false);


                $uni2DirOk = false;


                // saving old conf if exists
                $oldConfContent = null;

                if (is_dir($uni2DestDir)) {
                    $oldConfFile = $uni2DestDir . "/universe/Ling/Uni2/info/configuration/conf.byml";
                    if (file_exists($oldConfFile)) {
                        $oldConfContent = file_get_contents($oldConfFile);
                    }
                    execCmd('rm -rf "' . $uni2DestDir . '"');
                }


                if (true === rename($uni2ExtractedDir, $uni2DestDir)) {
                    echo success('ok');
                    $uni2DirOk = true;


                    if (null !== $oldConfContent) {
                        echo info('Restoring old configuration...', 1, false);
                        if (file_put_contents($oldConfFile, $oldConfContent)) {
                            echo success('ok');
                        } else {
                            echo error('oops');
                            echo error("Couldn't restore old configuration.");
                        }
                    }


                } else {
                    echo error('oops');
                    echo error("Couldn't rename \"$uni2ExtractedDir\" to \"$uni2DestDir\".");
                }


                if (true === $uni2DirOk) {
                    $uniProgramSrcPath = $uni2DestDir . "/uni.php";
                    if (file_exists($uniProgramSrcPath)) {


                        echo info('Assigning "' . path($uni2DestDir) . '" to user ' . bold($userName) . '...', 1, false);
                        if (true === execCmd('chown -R ' . $userName . ': "' . $uni2DestDir . '"')) {
                            echo success('ok');
                        } else {
                            echo error('oops');
                            echo error("Couldn't assign the directory to user " . bold($userName) . ". Try again with higher privileges.", 2);
                        }


                        echo info('Adding execute permissions to the uni.php script (' . path($uniProgramSrcPath) . ')...', 1, false);
                        if (true === execCmd('chmod u+x "' . $uniProgramSrcPath . '"')) {
                            echo success('ok');


                            $createSymlink = true;
                            if (true === file_exists($uniProgramDstPath)) {
                                if (is_link($uniProgramDstPath)) {
                                    unlink($uniProgramDstPath);
                                } else {
                                    $createSymlink = false;
                                    echo error("Error: a non-link entry named $uniProgramDstPath already exist. Remove it manually and retry to install the uni tool on this machine.");
                                }
                            }


                            if (true === $createSymlink) {

                                echo info('Creating symbolic link ' . path($uniProgramDstPath) . ' with target ' . path($uniProgramSrcPath) . '...', 1, false);
                                if (true === symlink($uniProgramSrcPath, $uniProgramDstPath)) {
                                    echo success('ok');
                                    echo success("Congrats! You can now use the uni command.", 1);
                                    echo info("Type " . bold("uni help") . " to get started.", 1);
                                } else {
                                    echo error('oops');
                                    echo error("Couldn't create the symlink. Do you have the permissions to do so?", 2);
                                }
                            }

                        } else {
                            echo error('oops');
                            echo error("Unable to give the execute permissions to the \"$uniProgramSrcPath\" script. Consider retrying with higher privileges.", 2);
                        }
                    } else {
                        echo error('oops');
                        echo error("Bad assertion: Uni program File not found in \"$uniProgramSrcPath\".", 2);
                    }
                }


            } else {
                echo error('oops');
                echo error("Couldn't unzip the " . path($uniToolZip) . error(" archive. No unzip command found, and no php zip extension found: https://secure.php.net/manual/en/zip.installation.php", 0, false), 2);
            }


        } else {
            echo error('oops');
            echo error("Couldn't download uni-tool from url " . path($uniToolUrl) . ".", 2);
            echo error("Install curl or wget and retry.", 2);
        }
    }


} else {
    echo error("I don't know how to install the uni-tool on this machine (os=$phpOs), sorry.");
}


execCmd('rm -rf "' . $tmpDir . '"');