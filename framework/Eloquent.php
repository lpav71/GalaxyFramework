<?php

namespace Framework;

use Illuminate\Database\Capsule\Manager as DB;

class Eloquent
{
    public static function EloquentConnection(): void
    {
        $config = Configurator::ReadConfiguration();
        $capsule = new DB;
        $dbHost = $config->database->host;
        $dbName = $config->database->basename;
        $dbUser = $config->database->user;
        $dbPassword = $config->database->password;
        $driver = $config->database->driver;

        $capsule->addConnection([
            'driver' => $driver,
            'host' => $dbHost,
            'database' => $dbName,
            'username' => $dbUser,
            'password' => $dbPassword,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}