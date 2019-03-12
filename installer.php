#!/usr/bin/env php
<?php
/**
 * temp_file=$(mktemp); curl -fsSL https://raw.githubusercontent.com/lingtalfi/universe-naive-importer/master/installer.php > $temp_file; php -f $temp_file;
 */


/**
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


function download($url, $file)
{
    $cmd = 'curl -Ls ' . $url . ' --output "' . $file . '"';
    $return = 0;
    $output = [];
    exec($cmd, $output, $return);
    return (0 === $return);
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
            $cmd = '"' . $unzipPath . '" -qq "' . $zipFile . '" -d "' . $targetDir . '"';
            $output = [];
            $returnVar = 0;
            exec($cmd, $output, $returnVar);
            return (0 === $returnVar);
        }

    }
    return false;
}


function execCmd($cmd)
{
    $output = [];
    $returnVar = 0;
    exec($cmd, $output, $returnVar);
    return (0 === $returnVar);
}


$uni2Url = "https://github.com/lingtalfi/Uni2/archive/master.zip"; // will extract as Uni2-master

$tmpDir = sys_get_temp_dir() . "/uni-tools-tmp";
@mkdir($tmpDir, 0777, true);


/**
 * Todo check that curl exist, if not exit...
 */
//--------------------------------------------
// FIRST TRY TO GET THE TYPE OF MACHINE (Mac, Linux, Windows, Unknown)
//--------------------------------------------
$phpOs = PHP_OS;
if ('Darwin' === $phpOs) {
    echo info('Installing ' . bold('uni-tool') . ' on ' . $phpOs . ' os...');
    $uniTargetDir = "/usr/local/etc/uni";
    $uniProgram = "/usr/local/etc/uni";


    if (true === checkWritableDir(dirname($uniTargetDir))) {
        @mkdir($uniTargetDir, 0777, true);

        $uni2Zip = $tmpDir . '/master.zip';


        echo info('Downloading Uni2 from github.com...', 1, false);


        if (true === download($uni2Url, $uni2Zip)) {
            echo success('ok');


            echo info('Extracting ' . $uni2Zip . "...", 1, false);


            if (unzip($uni2Zip, $tmpDir)) {
                echo success('ok');


                $uni2ExtractedDir = $tmpDir . '/Uni2-master';
                $uni2DestDir = $uniTargetDir . '/Uni2';
                echo info('Moving "' . $uni2ExtractedDir . '" to "' . $uni2DestDir . '"...', 1, false);


                $uni2DirOk = false;
                if (is_dir($uni2DestDir)) {
                    echo PHP_EOL;
                    echo info("The " . bold($uni2DestDir) . " directory already exists. Do you want to overwrite it and loose your current configuration? (y/n) ", 1, false);

                    $answer = strtolower(trim(fgets(STDIN)));
                    while ($answer !== 'y' && $answer !== 'n') {
                        echo info("I'm sorry I didn't understand. Do you want to overwrite the directory " . bold($uni2DestDir) . " and loose your current configuration? (y/n) ", 1, false);
                        $answer = strtolower(trim(fgets(STDIN)));

                    }
                    if ('y' === $answer) {
                        echo info("Removing directory " . bold($uni2DestDir) . "...", 1, false);
                        if (true === execCmd('rm -rf "' . $uni2DestDir . '"')) {
                            echo success('ok');

                            echo info('Moving "' . $uni2ExtractedDir . '" to "' . $uni2DestDir . '"...', 1, false);
                            if (true === rename($uni2ExtractedDir, $uni2DestDir)) {
                                echo success('ok');
                            } else {
                                echo error('oops');
                                echo error("Couldn't rename \"$uni2ExtractedDir\" to \"$uni2DestDir\"");
                            }
                        } else {
                            echo error('oops');
                            echo warning("Couldn't remove the directory \"$uni2DestDir\". The script will continue.");
                        }
                    }
                    $uni2DirOk = true;
                } else {
                    if (true === rename($uni2ExtractedDir, $uni2DestDir)) {
                        echo success('ok');
                        $uni2DirOk = true;
                    } else {
                        echo error('oops');
                        echo error("Couldn't rename \"$uni2ExtractedDir\" to \"$uni2DestDir\"");
                    }
                }


                if (true === $uni2DirOk) {

                    echo info('Extracting the uni program to ' . $uniProgram, 1);

                }


            } else {
                echo error('oops');
                echo error("Couldn't unzip the " . bold($uni2Zip) . error(" archive. No unzip command found, and no php zip extension found: https://secure.php.net/manual/en/zip.installation.php", 0, false), 2);
            }


        } else {
            echo error('oops');
            echo error("Couldn't download Uni2 from url " . bold($uni2Url), 2);
        }
    }


} else {
    echo error("I don't know how to install the uni-tool on this machine (os=$phpOs), sorry.");
}
