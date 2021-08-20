<?php

namespace App\Http\Controllers;

use App\Models\TypeTwoPatients;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('submit');
    }
    public function index()
    {
        $typetwocount=TypeTwoPatients::all();
        $usercounts=User::all();
        $unsubmittedadmins=User::where('submit',0)->get();
        return view('index',['typetwocounts'=>count($typetwocount),'usercounts'=>count($usercounts),'unsubmittedadmins'=>count($unsubmittedadmins)]);
    }
}
