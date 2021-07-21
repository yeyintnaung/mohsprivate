<?php

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

    Route::get('/createform', [TypeTwoPatientsController::class, 'createform']);
    Route::post('/create', [TypeTwoPatientsController::class, 'create']);

}

);
//end type two patients routes

require __DIR__ . '/auth.php';
