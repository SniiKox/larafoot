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

Route::get('/pronostic', [
    'as' => 'pronostic_path',
    'uses' => 'PronosticController@pageProno'
]);

Route::get('/resultat', [
    'as' => 'resultat_path',
    'uses' => 'ResultatController@pageResultat'
]);

Route::get('/analyse', [
    'as' => 'analyse_path',
    'uses' => 'AnalyseController@pageAnalyse'
]);

Route::get('/score', [
    'as' => 'score_path',
    'uses' => 'ScoreController@pageScore'
]);

Route::get('/championnat', [
    'as' => 'championnat_path',
    'uses' => 'ChampionnatController@pageChampionnat'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@pageContact'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);

Route::get('/test-email', function(){
    return new demandeCreated('Guillaume', 'guillaume@guillaume', 'coucou je suis un message de plus de 15 caractères');

});

