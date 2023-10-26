<?php

namespace App\Controllers;

class Testhome extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function index1(): string
    {
        return view('welcome_message');
    }

}
