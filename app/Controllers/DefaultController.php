<?php

namespace Galaxy\Controllers;

use Framework\Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class DefaultController
{
    public function __construct()
    {
        Eloquent::EloquentConnection();
    }

    public function home() : void
    {
        $e = 'Default - Home';
        view("default/index.twig", compact('e'));
    }

    public function contact() : void
    {
        $e = DB::table('api_logs')->get();
        dd($e);
    }
}