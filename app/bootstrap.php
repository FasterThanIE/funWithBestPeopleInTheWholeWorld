<?php

use Illuminate\Database\Capsule\Manager as DB;

require_once "vendor/autoload.php";

$capsule = new DB();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'katul123',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$schema = $capsule->getDatabaseManager()->getSchemaBuilder();