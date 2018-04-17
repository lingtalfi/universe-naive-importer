<?php


namespace Uni;


use ApplicationItemManager\Repository\AbstractRepository;

class LingUniverseRepository extends AbstractRepository
{
    public function getName()
    {
        return 'ling';
    }

    //--------------------------------------------
    // OVERRIDE THOSE METHODS
    //--------------------------------------------
    protected function createItemList()
    {
        return [
            'AdminTable' => [
                'deps' => [
                    'ling.QuickPdo',
                ],
                'description' => 'An object to display administrable list of rows.',
            ],
            'ApplicationItemManager' => [
                'deps' => [
                    "ling.Bat",
                    "ling.Output",
                    "ling.Program",
                    "ling.CommandLineInput",
                ],
                'description' => "A planet to help creating certain types of module management console program",
            ],
            'ApplicationLog' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => "Lightweight object to quickly send a message to a log file.",
            ],
            'ArrayExport' => [
                'deps' => [
                    'ling.ArrayToString',
                ],
                'description' => 'This class can export a php array containing closures (aka anonymous functions).',
            ],
            'ArrayStore' => [
                'deps' => [
                    'ling.ArrayExport',
                    'ling.Bat',
                ],
                'description' => 'Store/retrieve an array to/from a file.',
            ],
            'ArrayToString' => [
                'deps' => [
                ],
                'description' => 'Utility to export a php array in various string formats.',
            ],
            'ArrayToTable' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Create an html table from a php array.',
            ],
            'AssetLoader' => [
                'deps' => [
                ],
                'description' => 'Load assets (js/css) in your html page.',
            ],
            'AssetsList' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A helper class to manage assets in your website.',
            ],
            'Authenticate' => [
                'deps' => [
                    'ling.ArrayToString',
                    'ling.Bat',
                ],
                'description' => 'A system to handle permissions in your application.',
            ],
            'BabyDash' => [
                'deps' => [
                    'ling.IndentedLines',
                ],
                'description' => 'BabyDash is a notation to write an array in a language independent manner.',
            ],
            'BabyYaml' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'php implementation of a babyYaml reader.',
            ],
            'BashColorTool' => [
                'deps' => [
                ],
                'description' => 'A tool to create quick colored messages in console.',
            ],
            'Bat' => [
                'deps' => [
                    'ling.CopyDir',
                    'ling.Tiphaine',
                    'ling.BeeFramework',
                ],
                'description' => 'Bat (Basic Tools) is an ensemble of basic tools that one can use to hopefully do a job faster (from the coding point of view, not performance).',
            ],
            'Bate' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Bate (Basic Tools Extension) is an extension pack for Bat.',
            ],
            'Beauty' => [
                'deps' => [
                    'ling.DirScanner',
                ],
                'description' => 'Beauty searches for your test pages and executes them.',
            ],
            'BeeFramework' => [
                'deps' => [
                    'ling.Komin',
                ],
                'description' => 'A php framework.',
            ],
            'BullSheet' => [
                'deps' => [
                    'ling.Bat',
                    'ling.DirScanner',
                    'ling.QuickPdo',
                ],
                'description' => 'Generate fake data to populate your database.',
            ],
            'BumbleBee' => [
                'deps' => [
                ],
                'description' => 'Simple BSR-0 autoloader for a php project.',
            ],
            'Chronos' => [
                'deps' => [
                ],
                'description' => 'A simple chronometer to measure your app\'s timings.',
            ],
            'ClassCooker' => [
                'deps' => [],
                'description' => 'A tool to add/remove/update methods in a class.',
            ],
            'Colis' => [
                'deps' => [
                    'ling.Bat',
                    'ling.YouTubeUtils',
                    'ling.Tim',
                    'ling.UploaderHandler',
                ],
                'description' => 'Colis is an input form control connected to a library of user items (videos, images, you decide...).',
            ],
            'CommandLineInput' => [
                'deps' => [
                    "ling.Output",
                ],
                'description' => 'Api to access command line options and parameters.',
            ],
            'CommandLineOutput' => [
                'deps' => [],
                'description' => 'A tool for displaying messages on the console. It handles bashhtml format.',
            ],
            'CommandLineManiac' => [
                'deps' => [
                ],
                'description' => 'Tools for command line scripts written in php.',
            ],
            'ConditionResolver' => [
                'deps' => [
                ],
                'description' => 'Util to interpret a simple condition language for your applications.',
            ],
            'ConventionGuy' => [
                'deps' => [
                ],
                'description' => 'Check out my conventions. Tools can use them as references.',
            ],
            'ConsoleTool' => [
                'deps' => [
                ],
                'description' => 'A tool to help creating console programs.',
            ],
            'CopyDir' => [
                'deps' => [
                ],
                'description' => 'Utility to copy a dir recursively.',
            ],
            'CronTaskBot' => [
                'deps' => [
                ],
                'description' => 'A helper to monitor your cron tasks with a database.',
            ],
            'CrudGeneratorTools' => [
                'deps' => [
                    "ling.Bat",
                    "ling.ArrayToString",
                    "ling.QuickPdo",
                    "ling.Kamille",
                ],
                'description' => 'Tools to generate an admin like phpMyAdmin.',
            ],
            'CrudWithFile' => [
                'deps' => [
                    "ling.Bat",
                    "ling.ArrayToString",
                ],
                'description' => 'An object to do simple crud request on a file containing rows.',
            ],
            'Csv' => [
                'deps' => [],
                'description' => 'Csv utility tools.',
            ],
            'Dash2Array' => [
                'deps' => [
                ],
                'description' => 'Convert a dash tree to an array.',
            ],
            'DebugLogger' => [
                'deps' => [],
                'description' => 'A debug logger for your own tools.',
            ],
            'DerbyCache' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A persistent cache system. Daily rebuild using cron.',
            ],
            'Dir2Symlink' => [
                'deps' => [
                    'ling.Bat',
                    'ling.Output',
                ],
                'description' => 'Converts directories to symlinks, and vice versa.',
            ],
            'DirectoryCleaner' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A tool to remove undesirable entries from a directory.',
            ],
            'DirScanner' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Utility to scan a directory recursively and do something on every entry.',
            ],
            'DirTransformer' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'DirTransformer creates a modified copy of a given directory.',
            ],
            'Dispatcher' => [
                'deps' => [
                ],
                'description' => 'Some dispatchers for your app.',
            ],
            'Dreamer' => [
                'deps' => [
                ],
                'description' => 'This is a blog about my dreams.',
            ],
            'EchartsWrapper' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A php wrapper for the js echarts library.',
            ],
            'Ecp' => [
                'deps' => [
                ],
                'description' => 'A simple communication protocol for your app\'s ajax requests.',
            ],
            'Escaper' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A tool helping with string escaping.',
            ],
            'Explorer' => [
                'deps' => [
                ],
                'description' => 'Tool for installing planets into your application.',
            ],
            'Ffmpeg' => [
                'deps' => [
                ],
                'description' => 'A ffmpeg wrapper for php.',
            ],
            'FileCleaner' => [
                'deps' => [
                ],
                'description' => 'A helper class to clean a directory based on conditions.',
            ],
            'FileCreator' => [
                'deps' => [
                ],
                'description' => 'Create a file, line by line, or block by block.',
            ],
            'FileDeletor' => [
                'deps' => [
                ],
                'description' => 'A tool for deleting entries.',
            ],
            'FormModel' => [
                'deps' => [],
                'description' => 'An object to create a form model.',
            ],
            'FormRenderer' => [
                'deps' => [
                    "ling.Bat"
                ],
                'description' => 'This planet helps rendering a form, based on an array.',
            ],
            'FormTools' => [
                'deps' => [
                ],
                'description' => 'Some form tools that I use.',
            ],
            'GetFileSize' => [
                'deps' => [
                ],
                'description' => 'Php service to get the size of the file.',
            ],
            'GetRowsInterface' => [
                'deps' => [
                ],
                'description' => 'An interface to getRows.',
            ],
            'GreekTodoList' => [
                'deps' => [
                ],
                'description' => 'A simple todolist tool for small projects.',
            ],
            'GuiAdminTable' => [
                'deps' => [
                ],
                'description' => 'An object to display administrable list of rows.',
            ],
            'Here' => [
                'deps' => [
                ],
                'description' => 'Helper to represent events on an horizontal timeline.',
            ],
            'HtmlTemplate' => [
                'deps' => [
                ],
                'description' => 'A simple template system to work with jquery.',
            ],
            'Http4All' => [
                'deps' => [
                ],
                'description' => 'Some tools related to http.',
            ],
            'HybridList' => [
                'deps' => [
                ],
                'description' => 'A helper for building a list system in your app.',
            ],
            'Icons' => [
                'deps' => [
                ],
                'description' => 'Add svg icons to your website.',
            ],
            'IndentedLines' => [
                'deps' => [
                    'ling.Bat',
                    'ling.Bate',
                    'ling.Quoter',
                ],
                'description' => 'Convert lists in indentedLines format to php arrays.',
            ],
            'Ingenico' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Helper tools for implementing ingenico payment solutions.',
            ],
            'Installer' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Generic installer for a cms/framework.',
            ],
            'InstantLog' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A quick log tool for your php apps.',
            ],
            'JAjaxLoader' => [
                'deps' => [
                ],
                'description' => 'A jquery plugin to start/stop an ajax loader.',
            ],
            'JChronometer' => [
                'deps' => [
                ],
                'description' => 'A javascript chronometer.',
            ],
            'JCookie' => [
                'deps' => [
                ],
                'description' => 'A javascript library to handle cookies.',
            ],
            'JDragSlider' => [
                'deps' => [
                ],
                'description' => 'A helper drag function for your sliders.',
            ],
            'JFullScreen' => [
                'deps' => [
                ],
                'description' => 'Helper code to fullscreen with javascript.',
            ],
            'JGoodies' => [
                'deps' => [
                ],
                'description' => 'Some functions that I found useful while playing with jQuery/javascript.',
            ],
            'JImageRotator' => [
                'deps' => [
                ],
                'description' => 'simple image rotator for jquery.',
            ],
            'JInfiniteSlider' => [
                'deps' => [
                ],
                'description' => 'Simple jquery infinite (circular) slider.',
            ],
            'JItemSlider' => [
                'deps' => [
                ],
                'description' => 'Simple responsive jquery infinite (circular) slider, based on items.',
            ],
            'JQuery' => [
                'deps' => [
                ],
                'description' => 'Some compressed Jquery libraries.',
            ],
            'JVideoPlayer' => [
                'deps' => [
                ],
                'description' => 'A javascript library to help building a video player.',
            ],
            'JqueryUrlWithDropZone' => [
                'deps' => [
                    'ling.Jquery',
                ],
                'description' => 'A jquery based snippet to create a form control consisting of an input text and a dropzone.',
            ],
            'Kamille' => [
                'deps' => [
                    'ling.ApplicationItemManager',
                    'ling.ArrayExport',
                    'ling.Bat',
                    'ling.BeeFramework',
                    'ling.ClassCooker',
                    'ling.DirScanner',
                    'ling.LinearFile',
                    'ling.Loader',
                    'ling.Logger',
                    'ling.Output',
                    'ling.TokenFun',
                    'ling.Umail',
                ],
                'description' => 'My first implementation of the kam framework.',
            ],
            'KamilleEssentialTools' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Tools to help with Kamille development.',
            ],
            'KamillePacker' => [
                'deps' => [
                    'ling.Bat',
                    'ling.DirScanner',
                ],
                'description' => 'A kamille developer companion',
            ],
            'KamilleWidgets' => [
                'deps' => [
                    'ling.Kamille',
                ],
                'description' => 'Widgets for the kamille framework.',
            ],
            'KaminosUtils' => [
                'deps' => [
                    'ling.CopyDir',
                    'ling.Output',
                ],
                'description' => 'A planet to help implementing the kaminos admin system.',
            ],
            'Komin' => [
                'deps' => [
                ],
                'description' => 'An extension of the bee planet.',
            ],
            'LinearFile' => [
                'deps' => [
                ],
                'description' => "Manipulate your file as a stack of lines.",
            ],
            'Linker' => [
                'deps' => [
                ],
                'description' => 'Tool to help manage application symlinks.',
            ],
            'ListModifier' => [
                'deps' => [
                ],
                'description' => 'A system to shape a list of items in a mvc multi-widgets environment.',
            ],
            'ListParams' => [
                'deps' => [
                ],
                'description' => 'A simple tool to help shaping front-end lists in a MVC environment.',
            ],
            'Loader' => [
                'deps' => [
                ],
                'description' => 'Some loaders for your applications.',
            ],
            'Localys' => [
                'deps' => [
                ],
                'description' => 'A locale helper for your apps.',
            ],
            'LogSlicer' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Paginate your log file for display.',
            ],
            'Logger' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A simple logger that dispatches messages to listeners',
            ],
            'Lys' => [
                'deps' => [
                ],
                'description' => 'Another infinite scroll jquery plugin.',
            ],
            'Meredith' => [
                'deps' => [
                    'ling.Bat',
                    'ling.QuickPdo',
                    'ling.Tim',
                    'ling.StringFormatter',
                    'ling.SuspiciousException',
                ],
                'description' => 'Php plugin for implementing a crud strategy based on the jquery datatables plugin.',
            ],
            'MethodInjector' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A tool for injecting methods from a class to another.',
            ],
            'MikeMagicTools' => [
                'deps' => [
                ],
                'description' => 'This is a set of various tools.',
            ],
            'Models' => [
                'deps' => [
                ],
                'description' => 'Models for your templates',
            ],
            'ModelRenderers' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Some renderers for your models.',
            ],
            'MySimpleXmlElement' => [
                'deps' => [
                ],
                'description' => 'Yet another implementation of php\'s SimpleXmlElement class.',
            ],
            'MysqlTabular' => [
                'deps' => [
                ],
                'description' => 'Generate a mysql table with the "console" format.',
            ],
            'NotationFan' => [
                'deps' => [
                ],
                'description' => 'Planet about user notation.',
            ],
            'Notifier' => [
                'deps' => [
                ],
                'description' => 'A simple observer with php callable.',
            ],
            'NumericKeyArray' => [
                'deps' => [
                ],
                'description' => 'An api to update a numericKeyArray.',
            ],
            'Observer' => [
                'deps' => [
                ],
                'description' => 'I\'m an eye of the universe. I observe patterns emerging while the universe is being created.',
            ],
            'OnTheFlyForm' => [
                'deps' => [
                    "ling.FormTools",
                ],
                'description' => "A quick dirty form strategy for your front forms.",
            ],
            'Options' => [
                'deps' => [
                ],
                'description' => 'An options object that you can pass instead of an options array.',
            ],
            'OrmTools' => [
                'deps' => [
                ],
                'description' => 'Some tools helping with construction of orms.',
            ],
            'Ornella' => [
                'deps' => [
                ],
                'description' => 'Ornella is a notation for replacing {tags} with a customized value.',
            ],
            'Output' => [
                'deps' => [
                ],
                'description' => 'Object representing an output.',
            ],
            'Packer' => [
                'deps' => [
                    'ling.DirScanner',
                    'ling.TokenFun',
                ],
                'description' => 'A tool to pack multiple files into one.',
            ],
            'Pea' => [
                'deps' => [
                ],
                'description' => 'Php like functions in js.',
            ],
            'PermsHiker' => [
                'deps' => [
                    'ling.Bat',
                    'ling.DirScanner',
                ],
                'description' => 'PermsHiker helps migrating permissions from a server to another.',
            ],
            'PersistentRowCollection' => [
                'deps' => [
                    'ling.FormModel',
                    'ling.QuickPdo',
                    'ling.RowsGenerator',
                ],
                'description' => 'A base object for a crud system.',
            ],
            'PhpBeast' => [
                'deps' => [
                    'ling.ArrayToTable',
                ],
                'description' => 'This is a php implementation of the Beast component of the Beauty n Beast pattern.',
            ],
            'PhpExcelTool' => [
                'deps' => [
//                    'PHPOffice/PHPExcel', // ?
                ],
                'description' => 'A personal helper for using the PHPOffice/PHPExcel library.',
            ],
            'PhpFile' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'An helper object to create a php file from scratch.',
            ],
            'PhpTailer' => [
                'deps' => [
                    'ling.Bat'
                ],
                'description' => 'A php wrapper for the unix tail command.',
            ],
            'PhpTemplate' => [
                'deps' => [
                ],
                'description' => 'Simple php template system.',
            ],
            'Privilege' => [
                'deps' => [
                ],
                'description' => 'Grant privileges to your users.',
            ],
            'Program' => [
                'deps' => [
                    "ling.CommandLineInput",
                    "ling.Output",
                ],
                'description' => 'A class to help creating console programs',
            ],
            'PublicException' => [
                'deps' => [
                ],
                'description' => 'An exception for the gui user.',
            ],
            'QueryFilterBox' => [
                'deps' => [
                    'ling.ListParams',
                ],
                'description' => 'An other tool for handling list based on a sql query.',
            ],
            'QuickForm' => [
                'deps' => [
                    'ling.Bat',
                    'ling.QuickPdo',
                ],
                'description' => 'Quick and dirty form helper class in php.',
            ],
            'QuickLog' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Lightweight object to quickly send a message to a log file.',
            ],
            'QuickPdo' => [
                'deps' => [
                ],
                'description' => 'It\'s a static class that contains basic methods to interact with a mysql database via pdo.',
            ],
            'Quoter' => [
                'deps' => [
                    'ling.Bat',
                    'ling.WrappedString',
                    'ling.Escaper',
                ],
                'description' => 'Utilities to manipulate quotes.',
            ],
            'ReflectionRepresentation' => [
                'deps' => [
                    'ling.VariableToString',
                ],
                'description' => 'Class to help with representation of \\Reflection elements.',
            ],
            'RowsGenerator' => [
                'deps' => [
                    'ling.QuickPdo',
                ],
                'description' => "Generating rows for a dataTable like widget.",
            ],
            'RowsGeneratorWidget' => [
                'deps' => [
                    'ling.RowsGenerator',
                ],
                'description' => "A system to display list on a front end.",
            ],
            'RssUtil' => [
                'deps' => [
                    'ling.MySimpleXmlElement',
                ],
                'description' => 'RssUtil contains utilities related to rss.',
            ],
            'SafeUploader' => [
                'deps' => [

                ],
                'description' => 'Secure "server side ajax upload handling" using configuration file.',
            ],
            'SaveOrm' => [
                'deps' => [
                    'ling.Bat',
                    'ling.BeeFramework',
                    'ling.ThumbnailTools',
                ],
                'description' => 'Generate an orm that helps you inserting/updating data in your database.',
            ],
            'ScreenDebug' => [
                'deps' => [
                ],
                'description' => 'javascript helper to debug data that change rapidly.',
            ],
            'SecureImageUploader' => [
                'deps' => [
                    'ling.Bat',
                    'ling.ThumbnailTools',
                ],
                'description' => 'A simple to use and secure uploader for images in php.',
            ],
            'SelectChain' => [
                'deps' => [
                    'ling.Tim',
                ],
                'description' => 'A simple javascript object to handle a select chain.',
            ],
            'SequenceMatcher' => [
                'deps' => [
                ],
                'description' => 'Find/replace a pattern in a sequence of things.',
            ],
            'SitemapBuilderBox' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Utilities to create basic sitemaps.',
            ],
            'SitemapSlicer' => [
                'deps' => [
                    'ling.Bat',
                    'ling.SitemapBuilderBox',
                ],
                'description' => 'Generate a sitemap index and its related sitemaps using data from your database.',
            ],
            'SokoForm' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'SokoForm is a system that helps you creating your forms.',
            ],
            'SqlQuery' => [
                'deps' => [],
                'description' => 'An oop sql query object.',
            ],
            'SqlQueryWrapper' => [
                'deps' => [
                    "ling.SqlQuery",
                    "ling.QuickPdo",
                ],
                'description' => 'A wrapper for the SqlQuery planet, used to display lists in a front',
            ],
            'StepFormBuilder' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'A helper to implement a form composed of multiple steps.',
            ],
            'StringFormatter' => [
                'deps' => [
                    'ling.ArrayToString',
                    'ling.VariableToString',
                ],
                'description' => 'Tool to format string.',
            ],
            'SuspiciousException' => [
                'deps' => [
                ],
                'description' => 'This is an interface for the suspicious exception paradigm.',
            ],
            'SvgGridGenerator' => [
                'deps' => [
                ],
                'description' => 'Create css grid lines.',
            ],
            'TabathaCache' => [
                'deps' => [
                    "ling.Bat",
                ],
                'description' => "A cache system based on identifier invalidation.",
            ],
            'TheAnarchist' => [
                'deps' => [
                ],
                'description' => 'Hi, I\'m a php developer; this is my blog.',
            ],
            'TheBar' => [
                'deps' => [
                ],
                'description' => 'Various discussions about the universe and everything.',
            ],
            'TheScientist' => [
                'deps' => [
                ],
                'description' => 'No description, website, or topics provided.',
            ],
            'ThumbnailTools' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Tool for manipulating thumbnails.',
            ],
            'Tim' => [
                'deps' => [
                    'ling.Jquery',
                ],
                'description' => 'Tim is a simple protocol to help with communication between a client and a server.',
            ],
            'TimeFileUtil' => [
                'deps' => [
                ],
                'description' => 'A helper class to get the start date and end date from a directory.',
            ],
            'Tiphaine' => [
                'deps' => [
                ],
                'description' => 'Tool for converting a string to a mixed value, using tiphaine notation.',
            ],
            'TokenFun' => [
                'deps' => [
                    'ling.Bat',
                    'ling.DirScanner',
                ],
                'description' => 'Tools for playing with php tokens.',
            ],
            'Tokens' => [
                'deps' => [
                ],
                'description' => 'Manipulate the tokens inside a file.',
            ],
            'TreeListHelper' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Creates an array representing a directory (tree view).',
            ],
            'Umail' => [
                'deps' => [
                    'ling.DirScanner',
                ],
                'description' => 'A helper class to send mails.',
            ],
            'UniqueNameGenerator' => [
                'deps' => [
                    'ling.Bat',
                ],
                'description' => 'Tool to generate unique names.',
            ],
            'Updf' => [
                'deps' => [
                ],
                'description' => 'A helper class to create pdf.',
            ],
            'Uploader' => [
                'deps' => [
                ],
                'description' => 'Helps implementing a server side service to handle file uploads.',
            ],
            'UploaderHandler' => [
                'deps' => [
                ],
                'description' => 'A tool to help implementing an upload server (with or without chunking).',
            ],
            'UrlFriendlyListHelper' => [
                'deps' => [
                    'ling.Bat',
                    'ling.Jquery',
                    'ling.QuickPdo',
                ],
                'description' => 'Utility to handle pagination, sort and search in your html lists.',
            ],
            'VSwitch' => [
                'deps' => [
                ],
                'description' => 'Simple helper to show/hide portions of your html page.',
            ],
            'VariableToString' => [
                'deps' => [
                    'ling.ArrayToString',
                    'ling.ReflectionRepresentation',
                ],
                'description' => 'Utility to write any php variable to a string representation.',
            ],
            'VideoSubtitles' => [
                'deps' => [
                ],
                'description' => 'Tools to work with subtitles.',
            ],
            'WrappedString' => [
                'deps' => [
                    'ling.Escaper',
                ],
                'description' => 'Low level utilities to work with wrapped strings.',
            ],
            'YouTubeUtils' => [
                'deps' => [
                ],
                'description' => 'Tools to manipulate Youtube Apis.',
            ],
            'XiaoApi' => [
                'deps' => [
                    'ling.Bat',
                    'ling.QuickPdo',
                    'ling.ArrayToString',
                ],
                'description' => 'Create a consistent api based on a crud model.',
            ],
            'Zoli' => [
                'deps' => [
                ],
                'description' => 'a modal dialog.',
            ],
        ];
    }
}