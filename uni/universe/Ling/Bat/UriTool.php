<?php

namespace Ling\Bat;

/**
 * The UriTool class.
 * LingTalfi 2015-12-04
 */
class UriTool
{
    /**
     * Appends parameters to a base uri, and in the form of a query string (starting with a question mark).
     *
     */
    public static function appendQueryString($baseUri, array $parameters = [])
    {
        $ret = $baseUri;
        if (false === strpos($baseUri, "?")) {
            $sep = '?';
        } else {
            $sep = '&';
        }

        if ($parameters) {
            $ret .= $sep;
            $ret .= self::httpBuildQuery($parameters);
        }
        return $ret;
    }




    /**
     * Returns string|false
     *
     */
    public static function fileGetContents($url)
    {
        if (true === (bool)ini_get('allow_url_fopen')) {
            return file_get_contents($url);
        } elseif (function_exists('curl_version')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        return false;
    }

    public static function getHost()
    {
        if (array_key_exists('HTTP_HOST', $_SERVER)) {
            $domain = $_SERVER['HTTP_HOST'];
        } elseif (array_key_exists('SERVER_NAME', $_SERVER)) {
            $domain = $_SERVER['SERVER_NAME'];
        } else {
            $domain = false;
        }
        return $domain;
    }

    public static function getWebsiteAbsoluteUrl()
    {
        // http://stackoverflow.com/questions/1175096/how-to-find-out-if-youre-using-https-without-serverhttps
        $isSecure = false;
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $isSecure = true;
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            $isSecure = true;
        }
        $proto = (true === $isSecure) ? 'https' : 'http';
        if (array_key_exists('HTTP_HOST', $_SERVER)) {
            $domain = $_SERVER['HTTP_HOST'];
        } elseif (array_key_exists('SERVER_NAME', $_SERVER)) {
            $domain = $_SERVER['SERVER_NAME'];
        } else {
            return false;
        }
        return $proto . '://' . $domain;
    }


    /**
     * Returns the http query based on the given parameters.
     * It's almost like the http_build_query php function, except that it returns a non-url-encoded string.
     *
     * @param array $parameters
     * @return string
     */
    public static function httpBuildQuery(array $parameters): string
    {
        return urldecode(http_build_query($parameters));
    }



    public static function uri($uri = null, array $params = [], $replace = true, $absolute = false)
    {
        // assuming we are not using a cli environment
        if (null === $uri) {
            $uri = $_SERVER['REQUEST_URI'];
            $p = explode("?", $uri, 2);
            $uri = $p[0];
        }
        if (false === $replace) {
            $params = array_merge($_GET, $params);
        }
        $prefix = "";
        if (true === $absolute) {
            $prefix = UriTool::getWebsiteAbsoluteUrl();
        }
        $ret = $prefix . UriTool::appendQueryString($uri, $params);
        return rtrim($ret, '?');
    }
}