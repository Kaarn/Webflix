<?php

namespace App\Http\Controllers;

class AboutController
{
    public function index()
    {
        $name = 'A Propos';

        return view('about', [
            'name' => $name,
            'team' => ['Fiorella', 'Marina', 'Kant1'],
        ]);
    }

    public function show($user)
    {
        return view('about-show', [
            'user' => $user,
        ]);
    }
}