<?php

/**
 * 
 * @param string|null $param
 * @return string
 */
function site(string $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }

    return SITE["root"];
}

/**
 * 
 * @param string $imageUrl
 * @return string
 */
function routeImage(string $imageUrl): string
{
    return "https://via.placeholder.com/1200x628/0984e3/FFFFFF?text={$imageUrl}";
}

/**
 * 
 * @param string $path
 * @param bool $time
 * @return string
 */
function asset(string $path, $time = true): string
{
    $file = SITE["root"] . "/public/assets/{$path}";
    $fileOnDir = dirname(__DIR__, 1) . "/public/assets/{$path}";

    if ($time && file_exists($fileOnDir)) {
        $file .= "?time=" . filemtime($fileOnDir);
    }
    return $file;
}

/**
 * 
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return site("root") . "/{$uri}";
    }

    return site("root");
}
