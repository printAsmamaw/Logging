<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/log-example', 'LogController@index');

Route::get('/log-example', function () {
    Log::info('This is an informational message from the LogController.');
    return 'Log example. Check the logs for details.';
});

Route::get('/log-to-custom', function () {
    Log::channel('custom-channel')->info('This is a log message in the custom channel.');

    return 'Log example. Check the logs for details.';
});
Route::get('/log',function (){

    return response()->json(['mesage'=>'jonmat']);
});