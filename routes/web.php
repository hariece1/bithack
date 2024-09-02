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
    return view('Tpages.index');
});
Route::view('/events','tpages.events');
Route::view('/register','tpages.registration');
Route::view('/aboutus','tpages.aboutus');
Route::view('/contact','tpages.contact');
Route::view('/forum','tpages.forum');
Route::view('/admin/registrations/','tpages.admint.participantstable');

