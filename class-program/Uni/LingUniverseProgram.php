<?php


namespace Uni;


use ApplicationItemManager\Program\ApplicationItemManagerProgram;
use ApplicationItemManager\Program\LocalAwareApplicationItemManagerProgram;
use Bat\FileSystemTool;
use CommandLineInput\CommandLineInputInterface;
use Output\ProgramOutputInterface;
use Program\ProgramInterface;

class LingUniverseProgram extends LocalAwareApplicationItemManagerProgram
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


        $this->addCommand("init", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) {

            // this command is supposed to work only with modern uni (jin) apps (not old universe apps).
            $bigBangFile = $this->importDirectory . "/bigbang.php";

            $bigBangCreated = false;
            if (false === file_exists($bigBangFile)) {
                $tplBigBang = __DIR__ . "/../../template/jin-init/bigbang.php";
                FileSystemTool::copyFile($tplBigBang, $bigBangFile);
                $bigBangCreated = true;
            }


            $msg = "Importing universe/BumbleBee planet...";
            $bumbleDir = $this->importDirectory . "/BumbleBee";
            if(is_dir($bumbleDir)){
                $msg .= " already exist. Skipping.";
            }
            else{
                $tplBumbleDir = __DIR__ . "/../../template/jin-init/BumbleBee";
                FileSystemTool::copyDir($tplBumbleDir, $bumbleDir);
                $msg .= " ok.";
            }
            $output->info($msg);



            $msg = "Importing universe/bigbang.php...";
            if (true === $bigBangCreated) {
                $output->info($msg . " ok. You can now import planets with the \"uni import\" command.");
            } else {
                $output->info($msg . " already exists. Skipping.");
            }

            $output->notice("Now to activate the universe in your app you should add the following (php) line to your www/index.php if it's not already there:");
            $output->success("require_once __DIR__ . \"/../universe/bigbang.php\"; // activate universe");

            return true;
        });
    }

    public function executeCommand($name, $throwEx = true)
    {
        $hasError = false;
        if ('init' !== $name) {
            if (!is_dir($this->importDirectory)) {
                $this->output->error("importDir ($this->importDirectory) not found. You should create it first, then retry. Or try the \"uni init\" command.?");
                $hasError = true;
            }
        }

        if (false === $hasError) {
            parent::executeCommand($name, $throwEx);
        }
    }

}