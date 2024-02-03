<?php

use Galaxy\Handlers\CustomExceptionHandler;
use Galaxy\Middlewares\ApiVerification;
use Galaxy\Middlewares\CsrfVerifier;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::csrfVerifier(new CsrfVerifier());

Route::setDefaultNamespace('app\\Controllers');

Route::group(['exceptionHandler' => CustomExceptionHandler::class], function () {

    require_once 'web.php';

    Route::group(['prefix' => '/api', 'middleware' => ApiVerification::class], function () {
       require_once 'api.php';
    });

});



