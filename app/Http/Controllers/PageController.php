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


    public function employees()
    {
        $employees = User::get();

        return view('pages.employees.index', compact('employees'));
    }


    public function showEmployee($id)
    {
        $employee = User::find($id);

        return view('pages.employees.show', compact($employee));
    }
}
