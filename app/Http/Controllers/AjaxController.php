<?php

namespace App\Http\Controllers;

use Auth;
use App\AssignedObjective;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function addToList(Request $request) {
        try {
            AssignedObjective::firstOrCreate([
                'colleague_number' => Auth::id(),
                'objective_id' => $request->objective_id,
            ]);
            return ['status' => true];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage()];
        }
    }


    public function removeFromList(Request $request)
    {
        try {
            AssignedObjective::where('objective_id', $request->objective_id)
                ->where('colleague_number', Auth::id())
                ->delete();

            return ['status' => true];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage()];
        }
    }
}
