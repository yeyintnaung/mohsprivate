<?php

namespace App\Http\Controllers;

use App\Models\TypeTwoPatients;
use App\Typetworegister;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
            'town'=>'required','year_of_dx'=>'required|max:140','phone'=>'required|max:11','hypertension'=>'required','dyslipidaemia'=>'required',
            'bmi_weight'=>'required','bmi_height'=>'required','tuberculosis'=>'required','stroke'=>'required','ihd_mi'=>'required',
            'nephropathy'=>'required','neuropathy'=>'required','dm_foot'=>'required','oad'=>'required','insulin'=>'required','traditional'=>'required',
            'native'=>'required','anti_ht'=>'required','anti_lipid'=>'required','other'=>'required','others_drug_his'=>'required'



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


        return redirect('typetwopatients/list');
    }
    public function list(){
        $data=TypeTwoPatients::all();
        return view('typetwopatients.list',['data'=>$data]);
    }
    public function detail($id){
        $data=TypeTwoPatients::where('id',$id)->first();

        return view('typetwopatients.detail',['data'=>$data]);
    }
    public function delete(Request $request){
        TypeTwoPatients::where('id',$request->id)->delete();
        return redirect('typetwopatients/list');


    }
    public function editform($id)
    {
        $data=TypeTwoPatients::where('id',$id)->first();
        Artisan::call('view:clear');


        return view('typetwopatients.editform',['data'=>$data]);

    }
    public function edit(Request $request){
        $input = $request->except('_token');
        $rules=[
            'name'=>'min:4|max:200','age'=>'required|integer|max:120','duration_of_dm'=>'required|max:100',
            'town'=>'required','year_of_dx'=>'required|max:140','phone'=>'required|max:11','hypertension'=>'required','dyslipidaemia'=>'required',
            'bmi_weight'=>'required','bmi_height'=>'required','tuberculosis'=>'required','stroke'=>'required','ihd_mi'=>'required',
            'nephropathy'=>'required','neuropathy'=>'required','dm_foot'=>'required','oad'=>'required','insulin'=>'required','traditional'=>'required',
            'native'=>'required','anti_ht'=>'required','anti_lipid'=>'required','others'=>'required','others_drug_his'=>'required'
        ];
        $messages=[
            'name.min'=>'Your name must be 4 characters ','name.max'=>'Your name is too long'

        ];
        $validate=Validator::make($input,$rules,$messages);
        if($validate->fails()){
            Artisan::call('cache:clear');

            return redirect()->back()->withErrors($validate)->withInput();
        }
        foreach ($input as $key => $value) {
            if ($input[$key] == null) {
                $input[$key] = '';
            }

        }
        $input['updated_at'] = Carbon::now();
        TypeTwoPatients::where('id',$request->id)->update($input);
        return redirect('typetwopatients/list');

    }
}
