<?php

namespace App\Http\Controllers;

use App\Objective;
use Illuminate\Http\Request;

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
        $objectives = Objective::get();

        return view('pages.objective-pool.index', compact('objectives'));
    }


    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
