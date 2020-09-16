<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/styleMain.css");
$minCss->minify(dirname(__DIR__, 1) . "/public/assets/css/styleMain.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/goto.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/menu.js");
$minJs->add(dirname(__DIR__, 1) . "/public/assets/js/accordion.js");
$minJs->minify(dirname(__DIR__, 1) . "/public/assets/js/main.min.js");
