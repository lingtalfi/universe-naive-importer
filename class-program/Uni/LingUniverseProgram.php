<?php


namespace Uni;


use ApplicationItemManager\Program\ApplicationItemManagerProgram;
use CommandLineInput\CommandLineInputInterface;
use Output\ProgramOutputInterface;
use Program\ProgramInterface;

class LingUniverseProgram extends ApplicationItemManagerProgram
{
    public function __construct()
    {
        parent::__construct();

        $this->addCommand("update", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) {


            $d = realpath(__DIR__ . "/../..");

            $out = [];
            $returnVar = 0;
            $cmd = 'cd "' . $d . '"; git pull';
            exec($cmd, $out, $returnVar);
            $output->notice(implode(PHP_EOL, $out));


            if (0 === $returnVar) {
                return true;
            } else {
                return false;
            }
        });
    }

}