<?php

namespace App\Http\Controllers;

use Auth;
use App\Objective;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function usersHome()
    {
        return 'Users home';
    }


    public function myObjectives()
    {
        $objectives = Objective::where('created_by', Auth::id())
            ->where('type', 1)
            ->get();

        return view('pages.my-objectives.index', compact('objectives'));
    }


    public function coreCompetencies()
    {
        return view('pages.core-competencies.index');
    }
}
