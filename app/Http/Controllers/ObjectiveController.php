<?php

namespace App\Http\Controllers;

use \App\Objective;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    public function index()
    {
        $objectives = Objective::get();

        return view('pages.objective.index', compact('objectives'));
    }

    public function create()
    {
        return view('pages.objective.create');
    }

    public function store(Request $request)
    {
        try {
            Objective::create(
                array_merge(
                    $request->except('_token', 'key_result'),
                    [
                        'created_by' => \Auth::id(),
                        'key_results' => json_encode($request->key_result)
                    ]
                ));

            return redirect()->route('objectives.index')->with('success', 'New objective created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function show($id)
    {
        $objective = Objective::find($id);

        return view('pages.objective.show', compact('objective'));
    }

    public function edit($id)
    {
        $objective = Objective::find($id);

        return view('pages.objective.edit', compact('objective'));
    }

    public function update(Request $request)
    {
        dd($request->all());
    }

    public function delete($id)
    {
        try {
            Objective::find($id)->delete();
            return redirect()->route('objectives.index')->with('success', 'Objective deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }
}
