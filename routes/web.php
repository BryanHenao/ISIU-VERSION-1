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

Route::get('/','ControlladorWelcome@index')->name('Welcome');

/*Formularios*/ 
Route::get('FormularioI/','ControladorFormularios@ViewFormI')->name('FormularioI');
Route::get('FormularioII/','ControladorFormularios@ViewFormII')->name('FormularioII');
Route::get('Resumen/', 'ControladorFormularios@ViewResumen')->name('Resumen');

Route::post('RegistroF2/','ControladorFormularios@insertFormI')->name('formII');


Route::get('InicioSesion/','ControladorInicioSesion@viewLogin')->name('InicioSesion');
Route::get('Documentos/', 'ControlladorWelcome@Documentos')->name('Documentos');    


Route::group(['middleware'=>['auth']], function(){
    Route::get('FormularioII/','ControladorFormularios@ViewFormII')->name('FormularioII');
    Route::get('FormularioIII/','ControladorFormularios@ViewFormIII')->name('FormularioIII');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

