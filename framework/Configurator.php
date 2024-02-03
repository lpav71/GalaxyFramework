<?php

namespace Framework;

class Configurator
{
    public static function ReadConfiguration()
    {
        $fileConfig = file_get_contents('../appsettings.json');
        $config = json_decode($fileConfig);
        return $config;
    }
}