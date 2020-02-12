<?php

namespace App\Http\Controllers;

use App\Objective;
use App\ObjectiveCategory;
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
        $categories = ObjectiveCategory::get();
        return view('pages.objective.create', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $type = 0;
            if (\Auth::user()->type == 2) {
                $type = 1;
            }

            Objective::create(
                array_merge(
                    $request->except('_token', 'key_result'),
                    [
                        'created_by' => \Auth::id(),
                        'type' => $type,
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
        $categories = ObjectiveCategory::get();

        return view('pages.objective.edit', compact('objective', 'categories'));
    }

    public function update(Request $request, $id)
    {
        try {
            Objective::where('id', $id)
                ->update(array_merge($request->except('_token', 'key_result', '_method'), [ 'key_results' => json_encode($request->key_result)]));
            return redirect()->back()->with('success', 'Objective updated successfully.');
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('danger', $e->getMessage());
        }
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


    public function getMarkAsComplete ($objectiveID)
    {
        $objective = Objective::find($objectiveID);

        return view('pages.objective.mark-as-complete', compact('objective'));
    }


    public function postMarkAsComplete(Request $request)
    {
        dd($request->all());
    }
}
