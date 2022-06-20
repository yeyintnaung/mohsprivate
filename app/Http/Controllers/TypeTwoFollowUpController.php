<?php

namespace App\Http\Controllers;

use App\Http\Controllers\traid\logtraid;
use App\Models\Typetwofollowup;
use App\Models\TypeTwoPatients;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TypeTwoFollowUpController extends Controller
{
    use logtraid;

    //
    //
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }

    public function createform($link_patient_id = '')
    {

        $id = TypeTwoPatients::all();
        if ($link_patient_id != '') {
            $patient_data = TypeTwoPatients::select('name', 'father_name', 'nrc_no', 'phone_no')->where('id', $link_patient_id)->first();

        } else {
            $patient_data = '';
        }


        return view('typetwopatients.followup.create', ['id' => $id, 'link_patient_id' => $link_patient_id, 'patient_data' => $patient_data]);
    }


    public function create(Request $request)
    {
        $input = $request->except('_token');
//        return dd($input);
//        $rules=[
//            'hba1c'=>'required','hb'=>'required','cr'=>'required','uacr'=>'required','chol'=>'required','ldl'=>'required','hdl'=>'required','tg'=>'required','ascvd'=>'required','tsh'=>'required','u_a'=>'required','retinopathy'=>'required','neuropathy'=>'required','pad'=>'required','he'=>'required','patient_id'=>'required','date'=>'required'
//
//
//
//        ];
//        $messages=[
//
//        ];
//        $validate=Validator::make($input,$rules,$messages);
//        if($validate->fails()){
//            return redirect()->back()->withErrors($validate)->withInput();
//        }
//        foreach($input as $key=>$value){
//            if($input[$key] == null){
//                $input[$key]='';
//            }
//
//        }
        $input['created_at'] = Carbon::now();
        $input['admin_id'] = Auth::user()->id;
        $input['updated_at'] = Carbon::now();
        $addedfollowup=Typetwofollowup::create($input);
        $getpatient=TypeTwoPatients::where('id',$addedfollowup->patient_id);

        if($addedfollowup){
            $this->addtolog($addedfollowup->patient_id,$getpatient->first()->name,'create follow up');
        }
        return redirect('typetwofollowup/list');
    }

    public function list(Request $request)
    {

        $data= Typetwofollowup::all();
        foreach($data as $key => $value){
            $pinfo=TypeTwoPatients::where('id',$value->patient_id)->first();
            $data[$key]->name=$pinfo->name;
            $data[$key]->nrc_no=$pinfo->nrc_no;
            $data[$key]->father_name=$pinfo->father_name;
        }
        return view('typetwopatients.followup.list', ['data' => $data]);
    }

    public function detail($id)
    {
        $data = Typetwofollowup::where('id', $id)->first();
        $patient_info = TypeTwoPatients::where('id', $data->patient_id)->first();
        return view('typetwopatients.followup.detail', ['data' => $data, 'patient_info' => $patient_info]);

    }
    public function typetwofollowup_without_auth($id)
    {
        $data = Typetwofollowup::where('id', $id)->first();
        $patient_info = TypeTwoPatients::where('id', $data->patient_id)->first();
        return view('typetwopatients.followup.typetwofollowup_without_auth', ['data' => $data, 'patient_info' => $patient_info]);

    }

    public function delete(Request $request)
    {



        $getdata=Typetwofollowup::where('id', $request->id);
        $getpatient=TypeTwoPatients::where('id',$getdata->first()->patient_id);

        $this->addtolog($getdata->first()->patient_id,$getpatient->first()->name,'delete follow up');
        $getdata->delete();

        return redirect('typetwofollowup/list');


    }
}
