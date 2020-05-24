<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Non connecte pour :
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'AccueilController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes Authentifier pour : Le mode admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for people auth in your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
|--------------------------------------------------------------------------
| Web Routes Set Admin/GUEST
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Web Routes  Mon compte Admin/GUEST
|--------------------------------------------------------------------------
*/
Route::get('MonCompte', 'MonCompteController@CompteView')->name('InformationComplementaire');
Route::post('MonCompte', 'MonCompteController@PostInfo');


/*
|--------------------------------------------------------------------------
| Web Routes Appartement Nos appartements ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/rechercheadmin','AppartementController@rechercheadmin');

/*
|--------------------------------------------------------------------------
| Web Routes nosutilisateurs ADMIN
|--------------------------------------------------------------------------
*/

Route::get('utilisateurs', 'NosUtilisateursControllerAdmin@rechercheadmin')->name('InformationComplementaire');
Route::post('utilisateurs', 'NosUtilisateursControllerAdmin@rechercheadmin');
/*
|--------------------------------------------------------------------------
| Web Routes Nos Locataires ADMIN
|--------------------------------------------------------------------------
*/

Route::get('locationsencours', 'NosLocatairesControllerAdmin@rechercheadmin')->name('InformationComplementaire');
Route::post('locationsencours', 'NosLocatairesControllerAdmin@rechercheadmin');

Route::resource('appartements','AppartementController');
Route::resource('locataires','NosLocatairesController');
Route::resource('visters','visters');

