<?php


use BumbleBee\Autoload\ButineurAutoloader;
use Packer\Packer;


/**
 * That's my private script to generate the packed output (packed.txt at the root of this app).
 * I call this script via a webserver.
 */

ini_set("display_errors", "1");
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
require_once __DIR__ . '/class-planets/BumbleBee/Autoload/BeeAutoloader.php';
require_once __DIR__ . '/class-planets/BumbleBee/Autoload/ButineurAutoloader.php';
ButineurAutoloader::getInst()
    ->addLocation(__DIR__ . "/class-planets")
->start();


$d = __DIR__ . "/../pprivate";
$packer = new Packer();
$c = $packer->addDroppedNamespace("BumbleBee/Autoload")->pack($d);

$destFile = __DIR__ . "/../packed.txt";
file_put_contents($destFile, $c);

echo "ok";





