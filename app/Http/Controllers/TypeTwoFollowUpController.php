<?php

namespace App\Http\Controllers;

use App\Models\Typetwofollowup;
use App\Models\TypeTwoPatients;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeTwoFollowUpController extends Controller
{
    //
    //
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }
    public function createform(){
        $id=TypeTwoPatients::all();

        return view('typetwopatients.followup.create',['id'=>$id]);
    }


    public function create(Request $request){
        $input = $request->except('_token');
        $rules=[
            'hba1c'=>'required','hb'=>'required','cr'=>'required','uacr'=>'required','chol'=>'required','ldl'=>'required','hdl'=>'required','tg'=>'required','ascvd'=>'required','tsh'=>'required','u_a'=>'required','retinopathy'=>'required','neuropathy'=>'required','pad'=>'required','he'=>'required','patient_id'=>'required','date'=>'required'



        ];
        $messages=[

        ];
        $validate=Validator::make($input,$rules,$messages);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        foreach($input as $key=>$value){
            if($input[$key] == null){
                $input[$key]='';
            }

        }
        $input['created_at']=Carbon::now();
        $input['updated_at']=Carbon::now();
        Typetwofollowup::create($input);


        return redirect('typetwofollowup/list');
    }
    public function list(Request $request){
        $data=Typetwofollowup::all();
        return view('typetwopatients.followup.list',['data'=>$data]);
    }
    public function type_two_followup_detail($id){
        $data=Typetwofollowup::where('id',$id)->first();

        return view('type_two_followup_detail',['data'=>$data]);

    }
    public function delete_type_two_followup(Request $request){
        Typetwofollowup::where('id',$request->id)->delete();
        return redirect('type_two_followup_list');


    }
}
