<?php

namespace App\Http\Controllers;

use Auth;
use App\Objective;
use Illuminate\Http\Request;
use App\AssignedObjective;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            return redirect()->route('objectives.index');
        }

        if (Auth::user()->type == 2) {
            return redirect()->route('submissons');
        }
        $objectives = Objective::get();
        $totalObjectives = $objectives->count();

        $myAssignedObjectives = AssignedObjective::where('colleague_number', Auth::id())->get();
        $objectives = $objectives->whereNotIn('id', $myAssignedObjectives->pluck('objective_id')->toArray());

        return view('pages.objective-pool.index', compact('objectives', 'myAssignedObjectives', 'totalObjectives'));
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
