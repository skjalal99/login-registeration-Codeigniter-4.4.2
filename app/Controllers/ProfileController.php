<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');

        echo "<a href=".base_url().'/logout'.">Logout</a>";


    }
}
