<?php

namespace App\Http\Controllers;

use App\Models\TypeTwoPatients;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeTwoPatientsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }

    public function createform()
    {

        return view('typetwopatients.createform');

    }

    public function create(Request $request)
    {

        $input = $request->except('_token');
        $rules=[
            'name'=>'min:4|max:200','age'=>'required|integer|max:120','duration_of_dm'=>'required|max:100',
            'town'=>'required','year_of_dx'=>'required|max:140','phone'=>'required|max:11','hypertension'=>'required'

        ];
        $messages=[
            'name.min'=>'Your name must be 4 characters ','name.max'=>'Your name is too long'

        ];
        $validate=Validator::make($input,$rules,$messages);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        foreach ($input as $key => $value) {
            if ($input[$key] == null) {
                $input[$key] = '';
            }

        }
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        $input['admin_id'] = '1';

        TypeTwoPatients::create($input);


        return redirect('type_two_patients_list');
    }
}
