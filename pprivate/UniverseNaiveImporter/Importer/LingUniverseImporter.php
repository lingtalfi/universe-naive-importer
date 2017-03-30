<?php


namespace UniverseNaiveImporter\Importer;


class LingUniverseImporter extends AbstractGithubUniverseImporter
{

    protected function getDependencyMap()
    {
        return [
            "AdminTable" => ["QuickPdo"],
            "ApplicationLog" => ["Bat"],
            "ArrayExport" => ["ArrayToString"],
            "ArrayStore" => ["ArrayExport", "Bat"],
            "ArrayToString" => [],
            "ArrayToTable" => ["Bat"],
            "AssetLoader" => [],
            "AssetsList" => ["Bat"],
            "BabyDash" => ["IndentedLines"],
            "BabyYaml" => ["Bat"],
            "Bat" => ["CopyDir", "Tiphaine"],
            "Bate" => ["Bat"],
            "Beauty" => ["DirScanner"],
            "BullSheet" => ["Bat", "DirScanner", "QuickPdo"],
            "BumbleBee" => [],
            "Colis" => ["Bat", "YouTubeUtils", "Tim", "UploaderHandler"],
            "CommandLineInput" => ["Output"],
            "CommandLineManiac" => [],
            "ConventionGuy" => [],
            "ConsoleTool" => [],
            "CopyDir" => [],
            "Csv" => [],
            "DirScanner" => ["Bat"],
            "DirTransformer" => ["Bat"],
            "Dreamer" => [],
            "Escaper" => ["Bat"],
            "Explorer" => [],
            "Ffmpeg" => [],
            "FileCleaner" => [],
            "FileCreator" => [],
            "GetFileSize" => [],
            "Here" => [],
            "HtmlTemplate" => [],
            "Icons" => [],
            "IndentedLines" => ["Bat", "Bate", "Quoter"],
            "Installer" => ["Bat"],
            "InstantLog" => ["Bat"],
            "JAjaxLoader" => [],
            "JChronometer" => [],
            "JCookie" => [],
            "JDragSlider" => [],
            "JFullScreen" => [],
            "JGoodies" => [],
            "JImageRotator" => [],
            "JInfiniteSlider" => [],
            "JItemSlider" => [],
            "JQuery" => [],
            "JVideoPlayer" => [],
            "JqueryUrlWithDropZone" => ["Jquery"],
            "Kamille" => ["Bat", "Output", "TokenFun"],
            "KamilleWidgets" => ["Kamille"],
            "KaminosUtils" => ["CopyDir", "Output"],
            "Linker" => [],
            "LogSlicer" => ["Bat"],
            "Lys" => [],
            "Meredith" => ["Bat", "QuickPdo", "Tim", "StringFormatter", "SuspiciousException"],
            "MethodInjector" => ["Bat"],
            "MikeMagicTools" => [],
            "MySimpleXmlElement" => [],
            "MysqlTabular" => [],
            "NotationFan" => [],
            "Observer" => [],
            "Ornella" => [],
            "Output" => [],
            "Packer" => ["DirSscanner", "TokenFun"],
            "Pea" => [],
            "PermsHiker" => ["Bat", "DirScanner"],
            "PhpBeast" => ["ArrayToTable"],
            "PhpTemplate" => [],
            "Privilege" => [],
            "PublicException" => [],
            "QuickForm" => ["Bat", "QuickPdo"],
            "QuickLog" => ["Bat"],
            "QuickPdo" => [],
            "Quoter" => ["Bat", "WrappedString", "Escaper"],
            "ReflectionRepresentation" => ["VariableToString"],
            "RssUtil" => ["MySimpleXmlElement"],
            "ScreenDebug" => [],
            "SecureImageUploader" => ["Bat", "ThumbnailTools"],
            "SelectChain" => ["Tim"],
            "SequenceMatcher" => [],
            "SitemapBuilderBox" => ["Bat"],
            "SitemapSlicer" => ["Bat", "SitemapBuilderBox"],
            "StringFormatter" => ["ArrayToString", "VariableToString"],
            "SuspiciousException" => [],
            "SvgGridGenerator" => [],
            "TheAnarchist" => [],
            "TheBar" => [],
            "TheScientist" => [],
            "ThumbnailTools" => ["Bat"],
            "Tim" => ["Jquery"],
            "TimeFileUtil" => [],
            "Tiphaine" => [],
            "TokenFun" => ["Bat", "DirScanner"],
            "Tokens" => [],
            "TreeListHelper" => ["Bat"],
            "Umail" => ["DirScanner"],
            "UniqueNameGenerator" => ["Bat"],
            "Updf" => [], // requires https://github.com/tecnickcom/tcpdf
            "Uploader" => [],
            "UploaderHandler" => [],
            "UrlFriendlyListHelper" => ["Bat", "Jquery", "QuickPdo"],
            "VSwitch" => [],
            "VariableToString" => ["ArrayToString", "ReflectionRepresentation"],
            "VideoSubtitles" => [],
            "WrappedString" => ["Escaper"],
            "YouTubeUtils" => [],
            "Zoli" => [],
        ];
    }


    protected function getGithubRepositoryName()
    {
        return "lingtalfi";
    }


    public function getName()
    {
        return "LingUniverseImporter";
    }

    public function getUniverse()
    {
        return "ling";
    }


    protected function getDescription($planetName)
    {
        switch ($planetName) {
            case 'AdminTable':
                return "An object to display administrable list of rows.";
                break;
            case 'ApplicationLog':
                return "Lightweight object to quickly send a message to a log file.";
                break;
            case 'ArrayExport':
                return "This class can export a php array containing closures (aka anonymous functions).";
                break;
            case 'ArrayStore':
                return "Store/retrieve an array to/from a file.";
                break;
            case 'ArrayToString':
                return "Utility to export a php array in various string formats.";
                break;
            case 'ArrayToTable':
                return "Create an html table from a php array.";
                break;
            case 'AssetLoader':
                return "Load assets (js/css) in your html page.";
                break;
            case 'AssetsList':
                return "A helper class to manage assets in your website.";
                break;
            case 'BabyDash':
                return "BabyDash is a notation to write an array in a language independent manner.";
                break;
            case 'BabyYaml':
                return "php implementation of a babyYaml reader.";
                break;
            case 'Bat':
                return "Bat (Basic Tools) is an ensemble of basic tools that one can use to hopefully do a job faster (from the coding point of view, not performance).";
                break;
            case 'Bate':
                return "Bate (Basic Tools Extension) is an extension pack for Bat.";
                break;
            case 'Beauty':
                return "Beauty searches for your test pages and executes them.";
                break;
            case 'BullSheet':
                return "Generate fake data to populate your database.";
                break;
            case 'BumbleBee':
                return "Simple BSR-0 autoloader for a php project.";
                break;
            case 'Colis':
                return "Colis is an input form control connected to a library of user items (videos, images, you decide...).";
                break;
            case 'CommandLineManiac':
                return "Tools for command line scripts written in php.";
                break;
            case 'ConventionGuy':
                return "Check out my conventions. Tools can use them as references.";
                break;
            case 'ConsoleTool':
                return "A tool to help creating console programs.";
                break;
            case 'CopyDir':
                return "Utility to copy a dir recursively.";
                break;
            case 'Csv':
                return "Csv utility tools.";
                break;
            case 'DirScanner':
                return "Utility to scan a directory recursively and do something on every entry.";
                break;
            case 'DirTransformer':
                return "DirTransformer creates a modified copy of a given directory.";
                break;
            case 'Dreamer':
                return "This is a blog about my dreams.";
                break;
            case 'Escaper':
                return "A tool helping with string escaping.";
                break;
            case 'Explorer':
                return "Tool for installing planets into your application.";
                break;
            case 'Ffmpeg':
                return "A ffmpeg wrapper for php.";
                break;
            case 'FileCleaner':
                return "A helper class to clean a directory based on conditions.";
                break;
            case 'FileCreator':
                return "Create a file, line by line, or block by block.";
                break;
            case 'GetFileSize':
                return "Php service to get the size of the file.";
                break;
            case 'Here':
                return "Helper to represent events on an horizontal timeline.";
                break;
            case 'HtmlTemplate':
                return "A simple template system to work with jquery.";
                break;
            case 'Icons':
                return "Add svg icons to your website.";
                break;
            case 'IndentedLines':
                return "Convert lists in indentedLines format to php arrays.";
                break;
            case 'Installer':
                return "Generic installer for a cms/framework.";
                break;
            case 'InstantLog':
                return "A quick log tool for your php apps.";
                break;
            case 'JAjaxLoader':
                return "A jquery plugin to start/stop an ajax loader.";
                break;
            case 'JChronometer':
                return "A javascript chronometer.";
                break;
            case 'JCookie':
                return "A javascript library to handle cookies.";
                break;
            case 'JDragSlider':
                return "A helper drag function for your sliders.";
                break;
            case 'JFullScreen':
                return "Helper code to fullscreen with javascript.";
                break;
            case 'JGoodies':
                return "Some functions that I found useful while playing with jQuery/javascript.";
                break;
            case 'JImageRotator':
                return "simple image rotator for jquery.";
                break;
            case 'JInfiniteSlider':
                return "Simple jquery infinite (circular) slider.";
                break;
            case 'JItemSlider':
                return "Simple responsive jquery infinite (circular) slider, based on items.";
                break;
            case 'JQuery':
                return "Some compressed Jquery libraries.";
                break;
            case 'JVideoPlayer':
                return "A javascript library to help building a video player.";
                break;
            case 'JqueryUrlWithDropZone':
                return "A jquery based snippet to create a form control consisting of an input text and a dropzone.";
                break;
            case 'Kamille':
                return "My first implementation of the kam framework.";
                break;
            case 'KamilleWidgets':
                return "Widgets for the kamille framework.";
                break;
            case 'KaminosUtils':
                return "A planet to help implementing the kaminos admin system.";
                break;
            case 'Linker':
                return "Tool to help manage application symlinks.";
                break;
            case 'LogSlicer':
                return "Paginate your log file for display.";
                break;
            case 'Lys':
                return "Another infinite scroll jquery plugin.";
                break;
            case 'Meredith':
                return "Php plugin for implementing a crud strategy based on the jquery datatables plugin.";
                break;
            case 'MethodInjector':
                return "A tool for injecting methods from a class to another.";
                break;
            case 'MikeMagicTools':
                return "This is a set of various tools.";
                break;
            case 'MySimpleXmlElement':
                return "Yet another implementation of php's SimpleXmlElement class.";
                break;
            case 'MysqlTabular':
                return "Generate a mysql table with the \"console\" format.";
                break;
            case 'NotationFan':
                return "Planet about user notation.";
                break;
            case 'Observer':
                return "I'm an eye of the universe. I observe patterns emerging while the universe is being created.";
                break;
            case 'Ornella':
                return "Ornella is a notation for replacing {tags} with a customized value.";
                break;
            case 'Output':
                return "Object representing an output.";
                break;
            case 'Packer':
                return "A tool to pack multiple files into one.";
                break;
            case 'Pea':
                return "Php like functions in js.";
                break;
            case 'PermsHiker':
                return "PermsHiker helps migrating permissions from a server to another.";
                break;
            case 'PhpBeast':
                return "This is a php implementation of the Beast component of the Beauty n Beast pattern.";
                break;
            case 'PhpTemplate':
                return "Simple php template system.";
                break;
            case 'Privilege':
                return "Grant privileges to your users.";
                break;
            case 'PublicException':
                return "An exception for the gui user.";
                break;
            case 'QuickForm':
                return "Quick and dirty form helper class in php.";
                break;
            case 'QuickLog':
                return "Lightweight object to quickly send a message to a log file.";
                break;
            case 'QuickPdo':
                return "It's a static class that contains basic methods to interact with a mysql database via pdo.";
                break;
            case 'Quoter':
                return "Utilities to manipulate quotes.";
                break;
            case 'ReflectionRepresentation':
                return "Class to help with representation of \\Reflection elements.";
                break;
            case 'RssUtil':
                return "RssUtil contains utilities related to rss.";
                break;
            case 'ScreenDebug':
                return "javascript helper to debug data that change rapidly.";
                break;
            case 'SecureImageUploader':
                return "A simple to use and secure uploader for images in php.";
                break;
            case 'SelectChain':
                return "A simple javascript object to handle a select chain.";
                break;
            case 'SequenceMatcher':
                return "Find/replace a pattern in a sequence of things.";
                break;
            case 'SitemapBuilderBox':
                return "Utilities to create basic sitemaps.";
                break;
            case 'SitemapSlicer':
                return "Generate a sitemap index and its related sitemaps using data from your database.";
                break;
            case 'StringFormatter':
                return "Tool to format string.";
                break;
            case 'SuspiciousException':
                return "This is an interface for the suspicious exception paradigm.";
                break;
            case 'SvgGridGenerator':
                return "Create css grid lines.";
                break;
            case 'TheAnarchist':
                return "Hi, I'm a php developer; this is my blog.";
                break;
            case 'TheBar':
                return "Various discussions about the universe and everything.";
                break;
            case 'TheScientist':
                return "No description, website, or topics provided.";
                break;
            case 'ThumbnailTools':
                return "Tool for manipulating thumbnails.";
                break;
            case 'Tim':
                return "Tim is a simple protocol to help with communication between a client and a server.";
                break;
            case 'TimeFileUtil':
                return "A helper class to get the start date and end date from a directory.";
                break;
            case 'Tiphaine':
                return "Tool for converting a string to a mixed value, using tiphaine notation.";
                break;
            case 'TokenFun':
                return "Tools for playing with php tokens.";
                break;
            case 'Tokens':
                return "Manipulate the tokens inside a file.";
                break;
            case 'TreeListHelper':
                return "Creates an array representing a directory (tree view).";
                break;
            case 'Umail':
                return "A helper class to send mails.";
                break;
            case 'UniqueNameGenerator':
                return "Tool to generate unique names.";
                break;
            case 'Updf':
                return "A helper class to create pdf.";
                break;
            case 'Uploader':
                return "Helps implementing a server side service to handle file uploads.";
                break;
            case 'UploaderHandler':
                return "A tool to help implementing an upload server (with or without chunking).";
                break;
            case 'UrlFriendlyListHelper':
                return "Utility to handle pagination, sort and search in your html lists.";
                break;
            case 'VSwitch':
                return "Simple helper to show/hide portions of your html page.";
                break;
            case 'VariableToString':
                return "Utility to write any php variable to a string representation.";
                break;
            case 'VideoSubtitles':
                return "Tools to work with subtitles.";
                break;
            case 'WrappedString':
                return "Low level utilities to work with wrapped strings.";
                break;
            case 'YouTubeUtils':
                return "Tools to manipulate Youtube Apis.";
                break;
            case 'Zoli':
                return "a modal dialog.";
                break;
            default:
                return "";
                break;
        }
    }

}