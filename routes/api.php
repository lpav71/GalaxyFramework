<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::post('test', [\Galaxy\Controllers\Api\ApiController::class, 'test']);