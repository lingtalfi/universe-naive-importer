#!/usr/bin/env php
<?php


use Ling\Komin\Component\Console\Dialog\Dialog;
use Ling\Komin\Component\Console\Dialog\Tool\BooleanDialogTool;
use Ling\Komin\Component\Console\KeyboardListener\KeyboardListener;
use Ling\Komin\Component\Console\KeyboardListener\Tool\KeyboardListenerTool;
use Ling\Komin\Component\Console\Tool\TerminalCodesTool;

require_once 'alveolus/bee/boot/autoload.php';


KeyboardListenerTool::safeStty();


$fruits = [
    'apple',
    'banana',
    'cherry',
    'daemon',
];

KeyboardListener::$automatedInputs = [
    "orientale",
    "\n",
    "y",
];
$r = Dialog::create()->setQuestion("what kind of pizza?\n")->setSubmitCodes('return')->execute();
echo PHP_EOL;
$r2 = BooleanDialogTool::getBoolean("Like sushis (y or n)? ");





echo PHP_EOL;
echo "r=" . $r;
echo PHP_EOL;
echo "r2=" . (int)$r2;
