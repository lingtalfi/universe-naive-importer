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
    public static function appendParams($baseUri, array $parameters = [])
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


    /**
     * Returns the current url.
     *
     * Available options are:
     * - useForward: bool=false, whether to deal with the HTTP_X_FORWARDED_HOST property
     *
     *
     * https://stackoverflow.com/questions/6768793/get-the-full-url-in-php
     *
     * @param array $options
     * @return string
     */
    public static function getCurrentUrl(array $options = []): string
    {
        $use_forwarded_host = $options['useForward'] ?? false;

        $s = $_SERVER;
        $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on');
        $sp = strtolower($s['SERVER_PROTOCOL']);
        $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
        $port = $s['SERVER_PORT'];
        $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
        $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
        $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
        $urlOrigin = $protocol . '://' . $host;

        return $urlOrigin . $s['REQUEST_URI'];
    }


    /**
     * Returns the current host based on the $_SERVER information,
     * or false if it doesn't find anything (i.e. cli environment for instance).
     *
     * @return false|string
     */
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


    /**
     * Returns the get parameters attached to the given url.
     *
     * @param string $url
     * @return array
     */
    public static function getParams(string $url): array
    {
        $result = [];
        $p = explode('?', $url, 2);
        if (2 === count($p)) {
            $q = array_pop($p);
            parse_str($q, $result);
        }
        return $result;
    }


    /**
     * Returns the absolute url of the current process if available, or false otherwise.
     *
     *
     * @return false|string
     */
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


    /**
     *
     * Returns whether the given url matches the current url.
     *
     * It matches if both url share the same uri, and if all the GET parameters of the testUrl are present in the current url.
     *
     *
     * Note that for now, the testUrl must be in the uri format (i.e. starting with a slash), absolute urls are not yet accepted.
     * Same with current url.
     * This might change if the need for it appears in the future.
     *
     *
     *
     * @param string $testUrl
     * @param string|null $currentUrl
     * @return bool
     */
    public static function matchCurrentUrl(string $testUrl, string $currentUrl = null): bool
    {
        if (null === $currentUrl) {
            $currentUrl = $_SERVER['REQUEST_URI'];
        }
        $currentUrlParams = self::getParams($currentUrl);
        $p = explode('?', $currentUrl);
        $currentUri = array_shift($p);


        $testUrlParams = self::getParams($testUrl);
        $p = explode('?', $testUrl);
        $testUri = array_shift($p);

        if ($currentUri === $testUri) {
            foreach ($testUrlParams as $key => $value) {
                if (
                    true === array_key_exists($key, $currentUrlParams) &&
                    $value === $currentUrlParams[$key]
                ) {
                    continue;
                } else {
                    return false;
                }
            }
            return true;
        }
        return false;
    }


    /**
     * Adds a parameter to the given get array, which usually would be the $_GET array.
     * The added parameter is chosen randomly by default, or it can be fixed if the key argument is defined.
     *
     *
     * This might be useful in some cases for instance when you want to redirect the user to a success page
     * after a form, and you want the redirect page to be the form page itself.
     * In this case, without randomizing the url, if the user refresh the page the $_POST payload will be
     * resent (tested in firefox in 2019-12-09). By randomizing the url parameters, the browser will
     * consider the page as a new one, and the payload will be dropped.
     *
     *
     *
     * @param array $get
     * @param string $key
     */
    public static function randomize(array &$get, string $key = null)
    {
        $rand = rand(0, 9999);
        if (null !== $key) {
            $get[$key] = $rand;
            return;
        }


        $originalKey = 'r';
        $key = $originalKey;
        $c = 0;
        while (true === array_key_exists($key, $get)) {
            $key = $originalKey . $c++;
        }
        $get[$key] = $rand;

    }


    /**
     * Returns an uri from the given parameters.
     *
     *
     *
     * - uri: string|null=null, the base uri. If null, the current uri will be used.
     *      Note: you can also pass a full url it will work too (but be sure to have the absolute flag=false in that case).
     * - params: array, the parameters to add to the uri
     * - replace: bool=true, whether to replace the current url parameters by the one in the params array.
     *      If false, the existing uri parameters will be merged with the ones passed to this method.
     * - absolute: bool=false, whether to prefix the result with the host url
     *
     *
     * @param null $uri
     * @param array $params
     * @param bool $replace
     * @param bool $absolute
     * @return string
     */
    public static function uri($uri = null, array $params = [], $replace = true, $absolute = false)
    {
        // assuming we are not using a cli environment
        if (null === $uri) {
            $uri = $_SERVER['REQUEST_URI'];
        }
        $p = explode("?", $uri, 2);
        $uri = $p[0];
        $uriParams = [];
        if (2 === count($p)) {
            parse_str($p[1], $uriParams);
        }


        if (false === $replace) {
            $params = array_merge($uriParams, $params);
        }
        $prefix = "";
        if (true === $absolute) {
            $prefix = UriTool::getWebsiteAbsoluteUrl();
        }
        $ret = $prefix . UriTool::appendParams($uri, $params);
        return rtrim($ret, '?');
    }
}