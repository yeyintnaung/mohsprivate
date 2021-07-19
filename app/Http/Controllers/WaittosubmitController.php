<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WaittosubmitController extends Controller
{
    //
    public function getunsubmitusers(){
        $unsubmitusers=User::where('submit','0')->get();
        return view('submit_others.submit_others',['unsubmitusers'=>$unsubmitusers]);
    }
}
