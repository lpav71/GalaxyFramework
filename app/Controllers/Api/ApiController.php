<?php

namespace Galaxy\Controllers\Api;


class ApiController
{
    public function test()
    {
        $values = input()->all();
        $name = $values['name'];
        $a = array(
            'test' => $name
        );
        response()->httpCode(200)->json([
            $a
        ]);
    }
}