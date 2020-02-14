<?php

namespace App\Http\Controllers;

use Auth;
use App\Objective;
use App\AssignedObjective;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function usersHome()
    {
        return 'Users home';
    }


    public function myObjectives()
    {
        $objectives = AssignedObjective::where('colleague_number', Auth::id())
            ->get();

        return view('pages.my-objectives.index', compact('objectives'));
    }


    public function coreCompetencies()
    {
        return view('pages.core-competencies.index');
    }


    public function submissons()
    {
        $objectives = AssignedObjective::where('status', '!=', 0)->get();

        return view('pages.submissons.index', compact('objectives'));
    }
}
