<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//params for get_patient_detail ==   $name='' ,$id == ',$father_name == '', $nrc_no == '',

Route::post('/get_patient_detail',[\App\Http\Controllers\ForapiController::class, 'get_patient_detail']);



Route::post('/get_patient_detail_byid',[\App\Http\Controllers\ForapiController::class, 'get_patient_detail_byid']);


//params for get_all_patient ==   $name='' ,$father_name == '',



Route::post('/get_all_patient',[\App\Http\Controllers\ForapiController::class, 'get_all_patient']);
