<?php
use App\Mail\demandeCreated;

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
Route::get('/', [
    'as' => 'root_path',
    'uses' => 'HomeController@pageHome'
]);

Route::get('/pronostic', 'PronosticController@pageProno');

Route::get('/resultat', 'ResultatController@pageResultat');

Route::get('/analyse', 'AnalyseController@pageAnalyse');

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@pageContact'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);

Route::get('/test-email', function(){
    return new demandeCreated('Guillaume', 'guillaume@guillaume', 'testtesttesttesttest');

});

