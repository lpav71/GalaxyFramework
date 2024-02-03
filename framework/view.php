<?php

use Framework\Configurator;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

function view($template, $param = "") {
    $config = Configurator::ReadConfiguration();
    $mode = $config->mode;
    $currentMode = $mode === 'dev' ? true : false;
    $loader = new FilesystemLoader('../views');  // Путь к шаблонам
    $twig = new Environment($loader, [
        'cache' => 'cache', // Имя папки с файлами кэша
        'debug' => $currentMode     //true - шаблон перекомпилировать каждый раз
    ]);

    echo $twig->render($template, $param);
}
