<?php

namespace App\Http\Controllers;

use Auth;
use App\Objective;
use App\AssignedObjective;
use App\ObjectiveCategory;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{

    public function index()
    {
        if (Auth::user()->type == 2) {
            return redirect()->route('submissons');
        }

        if (Auth::user()->type == 3) {
            return redirect()->route('home');
        }

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

            $objecitve = Objective::create(
                array_merge(
                    $request->except('_token', 'key_result'),
                    [
                        'created_by' => \Auth::id(),
                        'type' => $type,
                        'key_results' => json_encode($request->key_result)
                    ]
                ));

            if ($type == 1) {
                AssignedObjective::firstOrCreate([
                    'colleague_number' => Auth::id(),
                    'objective_id' => $objecitve->id,
                ]);
                return redirect()->route('home')->with('success', 'New objective created & added to your list.');
            }

            return redirect()->route('objectives.index')->with('success', 'New objective created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function show($id)
    {
        $objective = Objective::find($id);
        $categories = ObjectiveCategory::get();

        return view('pages.objective.show', compact('objective', 'categories'));
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


    public function getMarkAsComplete($objectiveID)
    {
        $assigned = AssignedObjective::where('colleague_number', \Auth::id())
            ->where('objective_id', $objectiveID)
            ->first();

        if ($assigned->status != 0) {
            return redirect()->back()->with('warning', 'This objective already submitted for review.');
        }

        return view('pages.objective.mark-as-complete', compact('assigned'));
    }


    public function postMarkAsComplete(Request $request, $id)
    {
        $assigned = AssignedObjective::where('colleague_number', \Auth::id())
            ->where('id', $id)
            ->first();

        $filename                 = $request->file('evidence')->store('files', 'upload');
        $assigned->name           = $request->name;
        $assigned->role           = $request->role;
        $assigned->division       = $request->division;
        $assigned->expected_score = $request->expected_score;
        $assigned->comments       = $request->comments;
        $assigned->evidence       = $filename;
        $assigned->status         = 3;
        $assigned->save();

        return redirect()->route('my-objectives')->with('success', 'Submitted for review.');
    }


    public function approve(Request $request, $id)
    {
        $submission = AssignedObjective::find($id);
        $submission->achived_score = $request->achived_score;
    }

    public function viewSubmission($id)
    {
        $submission = AssignedObjective::where('status', 3)
            ->where('id', $id)
            ->first();

        return view('pages.submissons.view-submission', compact('submission'));
    }
}
