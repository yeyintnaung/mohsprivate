<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TypeTwoFollowUpController;
use App\Http\Controllers\TypeTwoPatientsController;
use App\Http\Controllers\WaittosubmitController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TypeTwoPatientsController::class, 'list']);
Route::get('/submit_others', [WaittosubmitController::class, 'get']);
Route::get('/waittosubmit', [WaittosubmitController::class, 'waittosubmit']);

Route::get('/submit/{id}', [WaittosubmitController::class, 'submit'])->where('id', '[0-9]+');


//for type two patients routes
Route::prefix('typetwopatients')->group(function(){
    Route::get('/log/list', [\App\Http\Controllers\LogController::class, 'list']);

    Route::get('/create', [TypeTwoPatientsController::class, 'createform']);
    Route::get('/edit/{id}', [TypeTwoPatientsController::class, 'editform']);
    Route::post('/edit/{id}', [TypeTwoPatientsController::class, 'edit']);
    Route::post('/create', [TypeTwoPatientsController::class, 'create']);
    Route::get('/list', [TypeTwoPatientsController::class, 'list']);
    Route::get('/detail/{id}', [TypeTwoPatientsController::class, 'detail']);
    Route::get('/detail_without_auth/{id}', [TypeTwoPatientsController::class, 'detail_without_auth']);
    Route::get('/typetwofollowup_without_auth/{id}', [TypeTwoFollowUpController::class, 'typetwofollowup_without_auth']);
    Route::post('/delete', [TypeTwoPatientsController::class, 'delete']);

}



);
Route::prefix('typetwofollowup')->group(function(){

    Route::get('/create/{id?}', [TypeTwoFollowUpController::class, 'createform']);
    Route::post('/create', [TypeTwoFollowUpController::class, 'create']);
    Route::get('/list', [TypeTwoFollowUpController::class, 'list']);
    Route::get('/detail/{id}', [TypeTwoFollowUpController::class, 'detail']);
    Route::post('/delete', [TypeTwoFollowUpController::class, 'delete']);



});
//end type two patients routes

require __DIR__ . '/auth.php';
