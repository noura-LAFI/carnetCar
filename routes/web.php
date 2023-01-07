<?php

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
Route::get('CarnetAddresse', function () {
    return view('listeCarnet');
});
Route::get('supPer', function () {
    return view('suppPersonne');
});
Route::get('AjouterPer', function () {
    return view('AjoutPersonne');
});
Route::get('MoPer', function () {
    return view('modifPersonne');
});
Route::get('recherche1', function () {
    return view('rechercherPer');
});
Route::get("CarnetAddresse", "App\Http\Controllers\personneController@index");

Route::get("ModPersonne", "App\Http\Controllers\personneController@update");
Route::get("recherche", "App\Http\Controllers\personneController@recherche");

Route::get("suppPersonne", "App\Http\Controllers\personneController@destroy");
Route::get("AjoutPersonne", "App\Http\Controllers\personneController@store");



