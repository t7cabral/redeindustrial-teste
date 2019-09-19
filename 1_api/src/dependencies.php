<?php
// DIC configuration

$container = $app->getContainer();

// PDO database library 
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];

    /* --- Conexão para SQLite 3 ---*/
    $path_db = getcwd().'\database.sqlite3'; // endereço do banco de dados
    $pdo = new PDO('sqlite:'.$path_db); // abrindo conexão
    return $pdo;

    /*---  Conexão para MySQL ---*/
    /*
    $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'].";charset=UTF8",
    $settings['user'], $settings['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
    */
};