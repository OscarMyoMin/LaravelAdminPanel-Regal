<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('sample')->controller(\App\Http\Controllers\Backend\SampleController::class)->group(function(){
   Route::get('dashboard', 'dashboard')->name('sample.dashboard');
   Route::get('chart', 'chart')->name('sample.chart');
   Route::get('table', 'table')->name('sample.table');
   Route::get('icon', 'icon')->name('sample.icon');
   Route::get('button', 'button')->name('sample.button');
   Route::get('typography', 'typography')->name('sample.typography');
   Route::get('forms', 'forms')->name('sample.forms');
   Route::get('login', 'login')->name('sample.auth.login');
   Route::get('login2', 'login2')->name('sample.auth.login2');
});
