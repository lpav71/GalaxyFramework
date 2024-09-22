<?php

namespace Framework;

class Configurator
{
    public static function ReadConfiguration()
    {
        $fileConfig = file_get_contents('../appsettings.json');
        return json_decode($fileConfig);
    }
}