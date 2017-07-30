<?php


namespace ApplicationItemManager\Program;


use ApplicationItemManager\ApplicationItemManager;
use ApplicationItemManager\ApplicationItemManagerInterface;
use ApplicationItemManager\Exception\ApplicationItemManagerException;
use Bat\FileSystemTool;
use CommandLineInput\CommandLineInputInterface;
use Dir2Symlink\ProgramOutputAwareDir2Symlink;
use DirectoryCleaner\DirectoryCleaner;
use Output\ProgramOutputInterface;
use Program\Program;
use Program\ProgramHelper;
use Program\ProgramInterface;

class ApplicationItemManagerProgram extends Program
{

    /**
     * @var ApplicationItemManagerInterface
     */
    protected $manager;
    protected $importDirectory;
    protected $helpFile;

    public function __construct()
    {
        parent::__construct();


        $itemType = $this->getItemType();

        $this
            ->addCommand("help", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) {
                $f = $this->getHelpPath();
                if (file_exists($f)) {
                    $s = file_get_contents($f);
                    $output->info($s);
                } else {
                    $output->error("Help file not found: $f");
                }
            })
            ->addCommand("import", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $force = $input->getFlagValue('f');
                if (false !== ($itemName = ProgramHelper::getParameter(2, $itemType, $input, $output))) {
                    $this->manager->import($itemName, $force);
                }
            })
            ->addCommand("importall", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $force = $input->getFlagValue('f');
                $repoId = $input->getParameter(2);
                if (true === $this->manager->importAll($repoId, $force)) {
                    $output->success("All items were imported");
                } else {
                    $output->error("Some items couldn't be imported");
                }
            })
            ->addCommand("install", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $force = $input->getFlagValue('f');
                if (false !== ($itemName = ProgramHelper::getParameter(2, $itemType, $input, $output))) {
                    $this->manager->install($itemName, $force);
                }
            })
            ->addCommand("installall", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $force = $input->getFlagValue('f');
                $repoId = $input->getParameter(2);
                if (true === $this->manager->installAll($repoId, $force)) {
                    $output->success("All items were installed");
                } else {
                    $output->error("Some items couldn't be installed");
                }
            })
            ->addCommand("uninstall", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                if (false !== ($itemName = ProgramHelper::getParameter(2, $itemType, $input, $output))) {
                    $this->manager->uninstall($itemName);
                }
            })
            ->addCommand("updateall", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $repoId = $input->getParameter(2);
                $this->manager->updateAll($repoId);
            })
            ->addCommand("list", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $repoId = $input->getParameter(2);
                $keys = null;
                $list = $this->manager->listAvailable($repoId, $keys);
                foreach ($list as $item) {
                    $output->notice("- $item");
                }
            })
            ->addCommand("listd", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $repoId = $input->getParameter(2);
                $keys = ['description'];
                $list = $this->manager->listAvailable($repoId, $keys);
                foreach ($list as $itemId => $metas) {
                    $output->info("- $itemId:");
                    $output->notice($this->indent($metas['description']));
                }
            })
            ->addCommand("listimported", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $list = $this->manager->listImported();
                foreach ($list as $item) {
                    $output->notice("- $item");
                }
            })
            ->addCommand("listinstalled", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $list = $this->manager->listInstalled();
                foreach ($list as $item) {
                    $output->notice("- $item");
                }
            })
            ->addCommand("search", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $text = $input->getParameter(2);
                $repoId = $input->getParameter(3);
                $keys = null;
                $list = $this->manager->search($text, $keys, $repoId);
                foreach ($list as $item) {

                    $highlighted = ProgramHelper::highlight($item, $text);
                    $output->notice("- $highlighted");
                }
            })
            ->addCommand("searchd", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {
                $text = $input->getParameter(2);
                $repoId = $input->getParameter(3);
                $keys = ['description'];
                $list = $this->manager->search($text, $keys, $repoId);

                foreach ($list as $itemId => $metas) {
                    $highlightedItemId = ProgramHelper::highlight($itemId, $text);
                    $highlightedDescription = ProgramHelper::highlight($metas['description'], $text);
                    $output->info("- $highlightedItemId:");
                    $output->notice($this->indent($highlightedDescription));
                }
            })
            ->addCommand("clean", function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($itemType) {


                $itemName = $input->getParameter(2);

                $dir = $this->getImportDirectory();

                if (null !== $itemName) {
                    $dir .= "/$itemName";
                    if (!is_dir($dir)) {
                        throw new ApplicationItemManagerException("Not a directory: $dir");
                    }
                }
                $recursive = true;
                DirectoryCleaner::create()->setUseSymlinks(false)->clean($dir, $recursive);
                $output->notice("ok");
            })
        ;

        $this->helpFile = __DIR__ . "/help.txt";

    }


    public function setManager(ApplicationItemManagerInterface $manager)
    {
        $this->manager = $manager;
        return $this;
    }

    public function addCommand($name, callable $fn)
    {
        $callback = function (CommandLineInputInterface $input, ProgramOutputInterface $output, ProgramInterface $program) use ($fn) {
            try {
                $this->handleDebug($input);
                call_user_func($fn, $input, $output, $program);
            } catch (ApplicationItemManagerException $e) {
                $output->error("Program error: " . $e->getMessage());
            }
        };
        return parent::addCommand($name, $callback);
    }

    public function setImportDirectory($importDirectory)
    {
        $this->importDirectory = $importDirectory;
        return $this;
    }

    public function setHelpFile($helpFile)
    {
        $this->helpFile = $helpFile;
        return $this;
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    protected function getHelpPath()
    {
        return $this->helpFile;
    }

    protected function getItemType()
    {
        return "item";
    }

    protected function indent($msg)
    {
        return ProgramHelper::indent($msg, $this->nbIndentSpaces());
    }


    protected function handleDebug(CommandLineInputInterface $input)
    {
        if (true === $input->getFlagValue("v") && $this->manager instanceof ApplicationItemManager) {
            $this->manager->setDebugMode(true);
        }
    }

    protected function nbIndentSpaces()
    {
        return 4;
    }

    protected function getImportDirectory()
    {
        if (null !== $this->importDirectory) {
            if (is_dir($this->importDirectory)) {
                return $this->importDirectory;
            } else {
                throw new ApplicationItemManagerException("importDirectory not valid: " . $this->importDirectory);
            }
        } else {
            throw new ApplicationItemManagerException("importDirectory not set");
        }
    }



}

