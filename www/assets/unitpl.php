#!/usr/bin/env php
<?php


//replace

//--------------------------------------------
// MANUALLY EDIT BELOW THIS LINE, BUT ABOVE THIS LINE IS AUTOMATICALLY GENERATED
/**
 * See the packed.php script for more info
 */
//--------------------------------------------
namespace {

    use BumbleBee\Autoload\ButineurAutoloader;
    use LocalUniverse\LocalUniverse;
    use Output\ProgramOutput;
    use Tools\CleanerTool;
    use Tools\SymlinkDirTool;
    use UniverseNaiveImporter\Helper\CliHelper;
    use UniverseNaiveImporter\Importer\LingUniverseImporter;
    use UniverseNaiveImporter\UniverseNaiveImporter;


    if (!function_exists('a')) {
        function a()
        {
            foreach (func_get_args() as $arg) {
                ob_start();
                var_dump($arg);
                $output = ob_get_clean();
                if ('1' !== ini_get('xdebug.default_enable')) {
                    $output = preg_replace("!\]\=\>\n(\s+)!m", "] => ", $output);
                }
                if ('cli' === PHP_SAPI) {
                    echo $output;
                } else {
                    echo '<pre>' . $output . '</pre>';
                }
            }
        }

        function az()
        {
            call_user_func_array('a', func_get_args());
            exit;
        }
    }


    function getHelpText()
    {
        return <<<HELP
\e[34m        
Usage
-------
uni import {fullPlanetName}                     # import one planet and dependencies, but skip already existing planet(s)/dependencies. You need to be in your application directory first
uni import -f {fullPlanetName}                  # remove the planet and its dependencies, then re-import them. You need to be in your application directory first
uni import _all_ {universe}?                    # import all planets and dependencies, but skip already existing planet(s)/dependencies. You need to be in your application directory first
uni import -f _all_ {universe}?                 # remove all planets and dependencies, then re-import them one by one. You need to be in your application directory first

uni importp {fullPlanetName}                    # like import, but in the import in the current directory (import in place) rather than in the class-planets directory
uni importp -f {fullPlanetName}                 # like import, but in the import in the current directory (import in place) rather than in the class-planets directory
uni importp _all_ {universe}?                   # like import, but in the import in the current directory (import in place) rather than in the class-planets directory
uni importp -f _all_ {universe}?                # like import, but in the import in the current directory (import in place) rather than in the class-planets directory

uni list {universe}?                            # list available planets
uni listd {universe}?                           # list available planets, with description

uni search {term} {universe}?                   # search a term in available planets
uni searchd {term} {universe}?                  # search a term in available planets and description

uni getlocaluniverse                            # get the local universe path
uni setlocaluniverse {localUniversePath}        # set the local universe path

uni tosymlink                                   # converts the planets of the application to symlinks (to the local universe)
uni todir                                       # converts the planets of the application to directories (copied from the local universe)

uni clean                                       # removes the .git, .gitignore, .idea and .DS_Store files at the top level of your application's planet directories, but does nothing if the planet is a symlink
uni cleanr                                      # removes the .git, .gitignore, .idea and .DS_Store files from the planet directories recursively, but does nothing if the planet is a symlink


For instance: 
    uni import Bat
    uni import ling.Bat
    uni import -f Bat
    uni import -f _all_
    uni import -f _all_ ling
    uni list
    uni list ling
    uni listd
    uni listd ling
    uni search ba
    uni search ba ling
    uni searchd ba 
    uni searchd ba ling
    uni setlocaluniverse /myphp/universe
    uni getlocaluniverse
    uni tosymlink
    uni todir
    uni clean
    uni cleanr
    
    
Options
-------------
-f: force overwriting of existing planets and dependencies.
    
    
Nomenclature
--------------
- fullPlanetName: (<universe> <.>) <planetName>
    

\e[0m
HELP;
    }


    ini_set("display_errors", 1);
    $devMode = false; // mode for ling, while developing
    if (true === $devMode) {
        require_once __DIR__ . "/pprivate/BumbleBee/Autoload/BeeAutoloader.php";
        require_once __DIR__ . "/pprivate/BumbleBee/Autoload/ButineurAutoloader.php";
        ButineurAutoloader::getInst()
            ->addLocation(__DIR__ . "/pprivate")
            ->start();
    }


    $output = ProgramOutput::create();
    $appDir = getcwd();
    $planetsRelativePath = 'class-planets';
    $localUniversePlanetsRelativePath = 'planets';

    $force = false;
    foreach ($argv as $k => $arg) {
        if ('-f' === $arg) {
            $force = true;
            unset($argv[$k]);
            $argv = array_merge($argv);
        }
    }


    $uni = UniverseNaiveImporter::create()
        ->setOutput($output)
        ->addImporter(LingUniverseImporter::create());


    try {
        //--------------------------------------------
        // IMPORT
        //--------------------------------------------
        if (array_key_exists(1, $argv) &&
            ('import' === $argv[1] || 'importp' === $argv[1]) &&
            array_key_exists(2, $argv)
        ) {


            $what = $argv[2];

            $universe = null;
            if (array_key_exists(3, $argv)) {
                $universe = $argv[3];
            }


            $createBigBang = true;
            if ('importp' === $argv[1]) {
                $planetsDir = $appDir;
                $createBigBang = false;
            } else {
                $planetsDir = $appDir . "/" . $planetsRelativePath;
            }
            if (false === file_exists($planetsDir)) {
                @mkdir($planetsDir, 0777, true);
            }


            if (file_exists($planetsDir)) {
                if ('_all_' === $what) {
                    $what = $uni->getAllPlanets($universe);
                }
                $uni->import($planetsDir, $what, $force);
                if (true === $createBigBang) {
                    $uni->bigbangify($planetsDir);
                }

            } else {
                $output->error("Cannot create the planets directory: $planetsDir");
            }

        }
        //--------------------------------------------
        // LIST
        //--------------------------------------------
        elseif (array_key_exists(1, $argv) &&
            (
                'list' === $argv[1] ||
                'listd' === $argv[1]
            )
        ) {
            $universe = null;
            if (array_key_exists(2, $argv)) {
                $universe = $argv[2];
            }
            $description = ('listd' === $argv[1]);
            $results = $uni->search(null, [
                'universe' => $universe,
                'description' => false,
            ]);
            CliHelper::printSearchResults($output, null, $results, $description);
        }
        //--------------------------------------------
        // SEARCH
        //--------------------------------------------
        elseif (array_key_exists(1, $argv) &&
            (
                'search' === $argv[1] ||
                'searchd' === $argv[1]
            )
            && array_key_exists(2, $argv)
        ) {
            $search = $argv[2];
            $universe = null;
            if (array_key_exists(3, $argv)) {
                $universe = $argv[3];
            }
            $description = ('searchd' === $argv[1]);
            $results = $uni->search($search, [
                'universe' => $universe,
                'description' => $description,
            ]);
            CliHelper::printSearchResults($output, $search, $results, $description);
        }
        //--------------------------------------------
        // SET/GET LOCAL UNIVERSE
        //--------------------------------------------
        elseif (array_key_exists(1, $argv) && 'setlocaluniverse' === $argv[1] && array_key_exists(2, $argv)) {
            $path = $argv[2];
            if (true === LocalUniverse::create()->setLocalUniversePath($path)) {
                $output->success("local path successfully set");
            } else {
                $output->error("local path couldn't be set");
            }

        } elseif (array_key_exists(1, $argv) && 'getlocaluniverse' === $argv[1]) {
            if (false !== ($path = LocalUniverse::create()->getLocalUniversePath())) {
                $output->notice($path);
            } else {
                $output->error("local path couldn't be retrieved. Please use the setlocaluniverse command first");
            }

        }
        //--------------------------------------------
        // TO SYMLINK, TO DIR
        //--------------------------------------------
        elseif (array_key_exists(1, $argv) &&
            ('tosymlink' === $argv[1] || 'todir' === $argv[1])
        ) {


            if (false !== ($path = LocalUniverse::create()->getLocalUniversePath())) {

                $mode = ('tosymlink' === $argv[1]) ? "symlink" : "dir";


                $localUniversePlanetsDir = $path . "/" . $localUniversePlanetsRelativePath;
                $appDir = getcwd();
                $targetPlanetsDir = $appDir . "/" . $planetsRelativePath;
                if (is_dir($localUniversePlanetsDir)) {
                    if (is_dir($targetPlanetsDir)) {
                        SymlinkDirTool::create()->setOutput($output)->convert($mode, $targetPlanetsDir, $localUniversePlanetsDir);
                    } else {
                        $output->error("The application planets directory doesn't exist. Please create it first, then re-execute this command. Expected path: $targetPlanetsDir");
                    }
                } else {
                    $output->error("The local universe planets dir was not found: $localUniversePlanetsDir. Have you set it with setlocaluniverse?");
                }
            } else {
                $output->error("local path couldn't be retrieved. Please use the setlocaluniverse command first");
            }

        }
        //--------------------------------------------
        // CLEAN
        //--------------------------------------------
        elseif (array_key_exists(1, $argv) &&
            (
                'clean' === $argv[1] ||
                'cleanr' === $argv[1]
            )
        ) {
            $targetPlanetsDir = $appDir . "/" . $planetsRelativePath;

            if (is_dir($targetPlanetsDir)) {
                $recursive = false;
                if ('cleanr' === $argv[1]) {
                    $recursive = true;
                }
                CleanerTool::create()->clean($targetPlanetsDir, $recursive);
            } else {
                $output->error("The application planets directory doesn't exist. Please create it first, then re-execute this command. Expected path: $targetPlanetsDir");
            }
        } else {
            $output->notice("");
            $output->error("Invalid arguments");
            echo getHelpText();
        }
    } catch (\Exception $e) {
        $output->error("Exception: " . $e->getMessage());
    }
}



