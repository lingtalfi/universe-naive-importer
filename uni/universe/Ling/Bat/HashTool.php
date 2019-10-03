<?php


namespace Ling\Bat;


use Ling\Bat\Exception\BatException;

/**
 * The HashTool class.
 */
class HashTool
{


    public static function getHashByArray(array $arr)
    {
        if ($arr) {
            asort($arr);
            return hash('ripemd160', serialize($arr));
        }
        return '';
    }

    /**
     * Returns the algo integer which corresponds to the given algoName, and to pass to the password_hash function
     * (https://www.php.net/manual/en/function.password-hash.php).
     *
     *
     * @param string $algoName
     * @return int
     * @throws \Exception
     */
    public static function getPasswordHashAlgorithm(string $algoName): int
    {
        switch ($algoName) {
            case "default":
                return PASSWORD_DEFAULT;
                break;
            case "bcrypt":
                return PASSWORD_BCRYPT;
                break;
            case "argon2i":
                return PASSWORD_ARGON2I;
                break;
            case "argon2id":
                return PASSWORD_ARGON2ID;
                break;
            default:
                throw new BatException("This algorithm is not recognized: " . $algoName);
                break;
        }
    }


    public static function getRandomHash64(int $length = 64)
    {
        if (function_exists('random_bytes')) {
            return substr(bin2hex(random_bytes($length)), 0, $length);
        }
        return hash('sha256', uniqid() . ")" . rand(0, 80));
    }


    public static function passwordVerify($password, $hash)
    {
        return (true === password_verify($password, $hash));
    }


    public static function passwordEncrypt($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }




}