<?php

namespace App\Http\Controllers;

use App\Models\TypeTwoPatients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForapiController extends Controller
{
    //
    public function get_patient_detail(Request $request)
    {
        if ($request->id != '') {
            $patient = TypeTwoPatients::where('id', $request->id)->get();

        } else {
            $patient = TypeTwoPatients::where([['name', '=', $request->name], ['father_name', '=', $request->father_name], ['nrc_no', '=', $request->nrc_no]])->orWhere('name', '=', $request->name)->orWhere('father_name', '=', $request->father_name)->orWhere('nrc_no', '=', $request->nrc_no)->get();

        }
        return response()->json($patient);
    }

    public function get_all_patient(Request $request)
    {
        if ($request->name != '') {
            $patient = TypeTwoPatients::select('id', 'name', 'father_name', 'nrc_no')->where('name', 'regexp', "^(" . $request->name . ")")->get();
        } else {
            $patient = TypeTwoPatients::select('id', 'name', 'father_name', 'nrc_no')->where('father_name', 'regexp', "^(" . $request->father_name.")")->get();

        }


        return response()->json($patient);

    }
    public function get_patient_detail_byid(Request $request)
    {

            $patient = TypeTwoPatients::where('id', $request->id)->get();


        return response()->json($patient);
    }
}
