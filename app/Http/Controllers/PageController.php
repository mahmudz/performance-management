<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function usersHome()
    {
        return 'Users home';
    }


    public function createObjective()
    {
        return view('pages.objective.index');
    }
}
