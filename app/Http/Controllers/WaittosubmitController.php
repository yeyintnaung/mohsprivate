<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class WaittosubmitController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }

    public function get()
    {
        $unsubmitusers = User::where('submit', '0')->OrderBy('id','desc')->get();
        return view('submit_others.submit_others', ['unsubmitusers' => $unsubmitusers]);
    }

    public function submit($id)
    {
        if (User::where('id', $id)->update(['submit'=> '1', 'submit_id'=> Auth::user()->id])) {
            $submiteduser=User::where('id',$id)->first();
            \Illuminate\Support\Facades\Session::flash('submitedmsg',$submiteduser->name.' has been submitted');
        return redirect()->back();
        }

    }


}
