<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE",[
    "name" => "Emplacar's | Emplacamento Automotivo",
    "desc" => "Emplacar's",
    "domain" => "mercosulemplacars.com.br",
    "locale" => "pt-BR",
    "root" => "https://localhost/desenvolvimento/Sites/Projeto_Emplacars",
    "title" => "Emplacar's",
    "mail" => "emplacars@gmail.com"
]);

/**
 * REGION
 */
define("REGION", [
   "region" => "BR-SP",
    "placename" => "S&atilde;o Paulo",
    "position" => "-23.477941;-46.706598",
    "icbm" => "-23.477941, -46.706598"
]);

/**
 * PHONE
 */
define("PHONE", [
    "whatsapp" => "1123735337"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost"){
    require __DIR__ . '/Minifier.php';
}

/**
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "datalayer_example",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL",[
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "",
    "twitter_creator" => "@",
    "twitter_site" => "@"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.goognet.com.br",
    "port" => "587",
    "user" => "sender@goognet.com.br",
    "passwd" => "Contato123*",
    "from_name" => "Thiago Marsola",
    "from_email" => "thiago.marsola@goognet.com.br"
]);

