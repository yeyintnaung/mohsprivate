<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }
    public function list(){
        $logs=Log::orderBy('id','desc')->get();
        return view('log.list',['data'=>$logs]);
    }
}
