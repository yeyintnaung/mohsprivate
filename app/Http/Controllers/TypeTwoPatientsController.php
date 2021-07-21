<?php

namespace App\Http\Controllers;

use App\Models\TypeTwoPatients;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TypeTwoPatientsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }
    public function createform(){

        return view('typetwopatients.createform');

    }
    public function create(Request $request){

        $input=$request->except('_token');
        foreach($input as $key=>$value){
            if($input[$key] == null){
                $input[$key]='';
            }

        }
        $input['created_at']=Carbon::now();
        $input['updated_at']=Carbon::now();
        $input['admin_id']='1';

        TypeTwoPatients::create($input);

        return redirect('type_two_patients_list');
    }
}
