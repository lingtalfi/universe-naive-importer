<?php


namespace ProgramPrinter;


class ProgramPrinter implements ProgramPrinterInterface
{
    public static function create()
    {
        return new static();
    }



    public function error($msg, $br = true)
    {
        echo "\e[31m$msg\e[0m";
        if (true === $br) {
            echo PHP_EOL;
        }
    }

    public function success($msg, $br = true)
    {
        echo "\e[32m$msg\e[0m";
        if (true === $br) {
            echo PHP_EOL;
        }
    }

    public function help()
    {
        echo <<<HELP
\e[34m        
Usage
-------
uni import {planetName} {universe}?                 # import one planet and dependencies, skip already existing planet(s)/dependencies
uni import -f {planetName} {universe}?              # import one planet and dependencies, replace already existing planet(s)/dependencies
uni list {universe}?                                # list available planets 

For instance: 
    uni import Bat
    uni import Bat ling
    uni import -f Bat
    uni list
    uni list ling
    
Options
-------------
-f: force overwriting of existing planets and dependencies. If not set, the Importer will skip existing planets/dependencies.    
    

\e[0m
HELP;
    }


    public function say($msg, $br = true)
    {
        echo $msg;
        if (true === $br) {
            echo PHP_EOL;
        }
    }

}