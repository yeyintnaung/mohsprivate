<?php

use App\Http\Controllers\TypeTwoFollowUpController;
use App\Http\Controllers\TypeTwoPatientsController;
use App\Http\Controllers\WaittosubmitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('index');
})->middleware(['auth', 'submit'])->name('main');
Route::get('/submit_others', [WaittosubmitController::class, 'get']);
Route::get('/submit/{id}', [WaittosubmitController::class, 'submit'])->where('id', '[0-9]+');


//for type two patients routes
Route::prefix('typetwopatients')->group(function(){

    Route::get('/create', [TypeTwoPatientsController::class, 'createform']);
    Route::get('/edit/{id}', [TypeTwoPatientsController::class, 'editform']);
    Route::post('/edit/{id}', [TypeTwoPatientsController::class, 'edit']);
    Route::post('/create', [TypeTwoPatientsController::class, 'create']);
    Route::get('/list', [TypeTwoPatientsController::class, 'list']);
    Route::get('/detail/{id}', [TypeTwoPatientsController::class, 'detail']);
    Route::post('/delete', [TypeTwoPatientsController::class, 'delete']);

}



);
Route::prefix('typetwofollowup')->group(function(){

    Route::get('/create', [TypeTwoFollowUpController::class, 'createform']);
    Route::post('/create', [TypeTwoFollowUpController::class, 'create']);
    Route::get('/list', [TypeTwoFollowUpController::class, 'list']);



});
//end type two patients routes

require __DIR__ . '/auth.php';
