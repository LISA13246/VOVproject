<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('search');
})->name ('search_page');
Route::post('/', 'App\Http\Controllers\SearchController@search')->name('veteran_search');


Route::get('/admin', function () {
 return view('admin');
})->name("admin_login");
Route::post('/admin','App\Http\Controllers\AdminController@login')->name('login');


Route::get('/admin/page', function () {
    $veterans = \App\Models\ParticipantsOfTheWar::all();
    return view('admin_page',['veterans'=>$veterans]);
   })->name('page')->middleware("validation");
Route::get('/admin/page/participants/delete/{id}', 'App\Http\Controllers\AdminController@deleteParticipants')->name('delete_participants')->middleware("validation");

Route::get('/admin/page/participants/edit/{id}', 'App\Http\Controllers\AdminController@editParticipantsGetView')
    ->name('edit_participants_get_view')->middleware("validation");
Route::post('/admin/page/participants/edit/{id}', 'App\Http\Controllers\AdminController@editParticipants')
    ->name('edit_participants')->middleware("validation");

Route::get('/admin/page/participants/add', 'App\Http\Controllers\AdminController@addParticipantsGetView')
    ->name('add_participants_get_view')->middleware("validation");
Route::post('/admin/page/participants/add', 'App\Http\Controllers\AdminController@addParticipants')
    ->name('add_participants')->middleware("validation");

Route::get('/test', function () {
    return view('add_veteran');
})->name('test');


