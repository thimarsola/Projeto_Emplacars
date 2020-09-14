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
   "name" => "Goognet Solução Digital",
    "desc" => "Goognet Solução Digital",
    "domain" => "goognet.com.br",
    "locale" => "pt_BR",
    "root" => "https://localhost/desenvolvimento/Projeto_Emplacars"
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
    "from_name" => "Website Lojas Emofer",
    "from_email" => "emofer@emofer.com.br"
]);

/**
 * REGION
 */
define("REGION", [
   "region" => "xxx",
    "placename" => "xxx",
    "position" => "xxx",
    "icbm" => "xxx"
]);

/**
 * PHONE
 */
define("PHONE", [
    "whatsapp" => "1123735337"
]);

