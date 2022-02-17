<?php

namespace App\Http\Controllers;

class HelloController
{
    public function hello()
    {
        return view('hello', [
            'name' => 'Fiorella',
            'numbers' => [1, 3, 7],
        ]);
    }

    public function name($name)
    {
        return view('hello', [
            'name' => $name,
            'numbers' => [],
        ]);
    }
}