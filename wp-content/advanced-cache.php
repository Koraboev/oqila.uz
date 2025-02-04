<?php

global $cache_stop;
$cache_stop = false;

// Globally used. Here because of the function "theme change"
if (defined('HYPER_CACHE_IS_MOBILE')) {
    $hyper_cache_is_mobile = (bool)HYPER_CACHE_IS_MOBILE;
} else if (defined('IS_PHONE')) {
    $hyper_cache_is_mobile = IS_PHONE;
} else {
    $hyper_cache_is_mobile = preg_match('#(android|iphone|iemobile|up\.browser|up\.link|mmp|symbian|smartphone|midp|wap|phone|ipod|xoom|blackberry)#i', $_SERVER['HTTP_USER_AGENT']);
}

$hyper_cache_gzip_accepted = isset($_SERVER['HTTP_ACCEPT_ENCODING']) && strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false;

$hyper_cache_is_bot = isset($_SERVER['HTTP_USER_AGENT']) && preg_match('#(googlebot)#i', $_SERVER['HTTP_USER_AGENT']);

if (0 === 2 && $hyper_cache_is_mobile) {
    hyper_cache_header('stop - mobile');
    $cache_stop = true;
    return false;
}

// Use this only if you can't or don't want to modify the .htaccess
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    hyper_cache_header('stop - non get');
    $cache_stop = true;
    return false;
}

if (!empty($_SERVER['QUERY_STRING'])) {
    hyper_cache_header('stop - query string');
    $cache_stop = true;
    return false;
}

if (defined('SID') && SID != '') {
    $cache_stop = true;
    return false;
}

if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache') {
    hyper_cache_header('stop - no cache header');
    $cache_stop = true;
    return false;
}

if (isset($_SERVER['HTTP_PRAGMA']) && $_SERVER['HTTP_PRAGMA'] == 'no-cache') {
    hyper_cache_header('stop - no cache header');
    $cache_stop = true;
    return false;
}


// Used globally
$hyper_cache_is_ssl = false;

// Copied from WP core
if (isset($_SERVER['HTTPS'])) {
    $server_https = strtolower($_SERVER['HTTPS']);
    if ('on' == $server_https || '1' == $server_https) {
        $hyper_cache_is_ssl = true;
    } else if (isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] )) {
        $hyper_cache_is_ssl = true;
    }
}

if (2 === 0 && $hyper_cache_is_ssl) {
    hyper_cache_header('stop - https');
    $cache_stop = true;
    return false;
}

if (0 && isset($_SERVER['HTTP_USER_AGENT'])) {
    if (preg_match('#()#i', $_SERVER['HTTP_USER_AGENT'])) {
        hyper_cache_header('stop - rejected user agent');
        $cache_stop = true;
        return false;
    }
}

if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $n => $v) {
        if (substr($n, 0, 20) == 'wordpress_logged_in_') {
            hyper_cache_header('stop - logged in cookie');
            $cache_stop = true;
            return false;
        }

        if (substr($n, 0, 12) == 'wp-postpass_') {
            hyper_cache_header('stop - password cookie');
            $cache_stop = true;
            return false;
        }

        if (0 && substr($n, 0, 14) == 'comment_author') {
            hyper_cache_header('stop - comment author cookie');
            $cache_stop = true;
            return false;
        }
        
        if (0) {
            if (preg_match('#()#i', $n)) {
                hyper_cache_header('stop - rejected cookie');
                $cache_stop = true;
                return false;
            }
        }
    }
}

// Globally used
$hyper_cache_group = '';

if (2 === 1 && $hyper_cache_is_ssl) {
    $hyper_cache_group .= '-https';
}

if (0 === 1 && $hyper_cache_is_mobile) {
    $hyper_cache_group .= '-mobile';
}

$hc_uri = hyper_cache_sanitize_uri($_SERVER['REQUEST_URI']);
$hc_host = hyper_cache_sanitize_host($_SERVER['HTTP_HOST']);
$hc_file = '/var/www/vhosts/oqila.loc/wp-content/cache/hyper-cache/' . $hc_host . $hc_uri . '/index' . $hyper_cache_group . '.html';
if (0 == 1 && $hyper_cache_gzip_accepted) {
    $hc_gzip = true;
} else {
    $hc_gzip = false;
}

if ($hc_gzip) {
    $hc_file .= '.gz';
}

if (!is_file($hc_file)) {
    hyper_cache_header('continue - no file');
    return false;
}

$hc_file_time = filemtime($hc_file);

if (0 && $hyper_cache_is_bot) {
    hyper_cache_header('hit - bot');
} else {
    if (24 > 0 && $hc_file_time < time() - (24 * 3600)) {
        hyper_cache_header('continue - old file');
        return false;
    }
}
if (array_key_exists("HTTP_IF_MODIFIED_SINCE", $_SERVER)) {
    $hc_if_modified_since = strtotime(preg_replace('/;.*$/', '', $_SERVER["HTTP_IF_MODIFIED_SINCE"]));
    if ($hc_if_modified_since >= $hc_file_time) {
        header("HTTP/1.0 304 Not Modified");
        flush();
        die();
    }
}

header('Content-Type: text/html;charset=UTF-8');
header('Last-Modified: ' . gmdate("D, d M Y H:i:s", $hc_file_time) . ' GMT');

if (0 === 0) {
    header('Vary: Accept-Encoding');
} else {
    header('Vary: Accept-Encoding,User-Agent');
}

if (1) {
    if (24 != 0) {
        $hc_cache_max_age = 24 * 3600;
    } else {
        // If there is not a default expire time, use 24 hours.
        if (24 > 0) {
            $hc_cache_max_age = time() + (24 * 3600) - $hc_file_time;
        } else {
            $hc_cache_max_age = time() + (24 * 3600) - $hc_file_time;
        }
    }
    header('Cache-Control: public, max-age=' . $hc_cache_max_age, false);
} else {
    header('Cache-Control: public, max-age=0, no-cache, no-transform', false);
}

if ($hc_gzip) {
    hyper_cache_header('hit - gzip' . $hyper_cache_group);
    header('Content-Encoding: gzip');
    header('Content-Length: ' . filesize($hc_file));
} else {
    hyper_cache_header('hit - plain' . $hyper_cache_group);
    header('Content-Length: ' . filesize($hc_file));
}

//if (0) {
    readfile($hc_file);
//} else {
//    echo file_get_contents($hc_file);
//}
die();

function hyper_cache_sanitize_uri($uri) {
    $uri = preg_replace('|[^a-zA-Z0-9/\-_]+|', '_', $uri);
    $uri = preg_replace('|/+|', '/', $uri);
    $uri = rtrim($uri, '/');
    if (empty($uri) || $uri[0] != '/') {
        $uri = '/' . $uri;
    }
    return $uri;
}

function hyper_cache_sanitize_host($host) {
    $host = preg_replace('|[^a-zA-Z0-9\.\-]+|', '', $host);
    return strtolower($host);
}

function hyper_cache_header($value) {
    header('X-Hyper-Cache: ' . $value, false);
}
