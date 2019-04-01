<?php 

function download_from_internet($url)
{
    $curl = curl_init();
//  curl_setopt($curl, CURLOPT_COOKIEFILE, CACHE_DIR . DIRECTORY_SEPARATOR . 'cookies.txt');
//  curl_setopt($curl, CURLOPT_COOKIEJAR, CACHE_DIR . DIRECTORY_SEPARATOR . 'cookies.txt');
//  curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_URL, $url);
    $response = curl_exec($curl);
 
    return $response;
}

// we prepare a path to where we want to cache responses
define('CACHE_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache');
 
/**
 * @param string $url
 * @param int $ttl Time To Live seconds (86400 = 60*60*24)
 * @return mixed|string
 */
function download_with_cache($url, $ttl = 86400)
{
    $cache_file = CACHE_DIR . DIRECTORY_SEPARATOR . strtr($url, ':/?|#=', '......');
 
    // this lines will check and create a cache directory if there is none
    if (!is_dir(CACHE_DIR)) {
        mkdir(CACHE_DIR, 0777, true);
    }
 
    // if cache exists and is not too old
    if (
        is_file($cache_file)
        &&
        filemtime($cache_file) > time() - $ttl)
    {
        // get the contents from the cache
        $contents = file_get_contents($cache_file);
    // else
    } else {
        // download it
        $contents = download_from_internet($url);
        // and create cache
        file_put_contents($cache_file, $contents);
    }
 
    return $contents;
}

$response = download_with_cache('https://www.kinobox.cz/');

var_dump($response);