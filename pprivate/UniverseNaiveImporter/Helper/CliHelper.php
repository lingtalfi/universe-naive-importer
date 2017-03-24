<?php


namespace UniverseNaiveImporter\Helper;


use Output\ProgramOutputInterface;

class CliHelper
{
    public static function printSearchResults(ProgramOutputInterface $output, $search, array $results, $showDescription = false)
    {
        if (null !== $search) {
            $search = strtolower(trim($search));
        }

        foreach ($results as $universe => $planets) {
            $output->notice("universe $universe:");


            foreach ($planets as $planetInfo) {

                if (null !== $search) {
                    $planet = self::highlight($planetInfo[0], $search);
                    $description = self::highlight($planetInfo[1], $search);
                } else {
                    list($planet, $description) = $planetInfo;
                }

                if (false === $showDescription) {
                    $output->notice("- " . $planet);
                } else {
                    $output->info("- " . $planet);
                    $output->notice(self::indent($description));
                }
            }
        }
    }


    private static function indent($text)
    {
        $nbSpaces = 4;
        $p = explode(PHP_EOL, $text);
        $sp = str_repeat(" ", $nbSpaces);
        return $sp . implode(PHP_EOL . $sp, $p);
    }

    private static function highlight($text, $search)
    {
        $ret = $text;
        $positions = [];


        $offset = 0;
        $len = mb_strlen($search);
        while (false !== ($pos = mb_stripos($text, $search, $offset))) {
            $positions[] = $pos;
            $offset = $pos + 1;
        }
        rsort($positions);

        if (count($positions) > 0) {
            foreach ($positions as $pos) {
                $s = "";
                $s .= mb_substr($ret, 0, $pos);
                $s .= "\033[1;37m\033[44m" . mb_substr($text, $pos, $len) . "\033[0m";
//                        $s .= "[" . mb_substr($ret, $pos, $len) . "]";
                $s .= mb_substr($ret, $pos + $len);
                $ret = $s;
            }


        }
        return $ret;
    }
}