<?php

namespace App\Http\Controllers;

use App\Models\Typetwofollowup;
use App\Models\TypeTwoPatients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForapiController extends Controller
{
    //
    public function get_patient_detail(Request $request)
    {
        if ($request->id != '') {
            $patient = TypeTwoPatients::where('id', $request->id)->first();
            $follow_up=Typetwofollowup::where('patient_id',$request->id)->first();

        } else {
            if(empty($request->father_name)){
                $request->father_name ='%';
            }
            if(empty($request->name)){
                $request->name ='%';
            }
            if(empty($request->nrc_no)){
                $request->nrc_no ='%';
            }
            $patient = TypeTwoPatients::where([['name', 'like', $request->name], ['father_name', 'like', $request->father_name], ['nrc_no', 'like', $request->nrc_no]])->first();
            $follow_up=Typetwofollowup::where('patient_id',$patient->id)->first();

        }
        return response()->json(['patient'=>$patient,'follow_up'=>$follow_up]);
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
