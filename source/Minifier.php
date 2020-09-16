<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/public/assets/css/styleMain.css");
$homeCss->minify(dirname(__DIR__, 1) . "/public/assets/css/styleMain.min.css");

$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/public/assets/css/styleError.css");
$errorCss->minify(dirname(__DIR__, 1) . "/public/assets/css/styleError.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/goto.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/menu.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/accordion.js");
$minJs->minify(dirname(__DIR__, 1) . "/public/assets/js/main.min.js");
