<?php

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

use App\Http\Controllers\PropostasController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
    return view('home');
    }else{    return view('auth.login');
    }
});

Auth::routes();
Route::get('cadastrarproposta','PropostasController@cadastrar');
Route::get('todaspropostas','PropostasController@index');
Route::get('verificaStatus','PropostasController@verificaStatusProposta');
Route::get('aprovarpropostas','PropostasController@aprovarPropostas');
Route::get('aprovarproposta/{id}', ['uses' =>'PropostasController@aprovarProposta']);
Route::get('deleteproposta/{id}', ['uses' =>'PropostasController@destroy']);
Route::post('/propostaInsertion','PropostasController@store');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/auth/logout', 'Aut');
Route::get('logout', array('uses' => 'HomeController@doLogout'));
Route::get('verproposta/{id}', ['uses' =>'PropostasController@listaPropostaCompleta']);
//Route::resource('proposta','PropostasController');
