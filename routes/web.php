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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/verificar', 'LoginActiveController@comprobar');
/*Route::get('/login', function(){
	return view('auth.login');

});*/
Route::get('/loginactive', 'LoginActiveController@index');
Route::get('FormatoRegistro/{id}', 'PDFcontroller@datos');

Route::get('/persona', function(){
	return view('persona');

});

Route::get('/main', function(){
	return view('forms.form-denunciante');

});

Route::get('/pruebas', function(){
	return view('validacion');

});

Route::get('/header', function(){
	return view('template.main');


});

Route::resource('/preregistro','PreregistroController');

Route::resource('/predenuncias','PreregistroAuxController');

Route::get('/createpruebas', function(){
	return view('preregistroWeb.createpruebas');


});