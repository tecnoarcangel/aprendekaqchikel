<?php

/*use Illuminate\Support\Facades\Route;

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

Route::view('/','home')->name('home');
Route::view('/quienes somos', 'about')->name('about');

/* Route::get('/familia', 'FamiliaController@index')->name('familia.index');
Route::post('/familia', 'FamiliaController@store')->name('familia.store');

Route::get('/familia/create', 'FamiliaController@create')->name('familia.create');

Route::get('/familia/{id}/edit', 'FamiliaController@edit')->name('familia.edit');

///esta esta rara
Route::patch('/familiaedit', 'FamiliaController@update')->name('familia.update');



*/

Route::view('/contenido', 'contenido')->name('contenido');
Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'MessageController@store')->name('messages.store');
Route::resource('palabra', PalabraController::class);
Route::get('buscar',  'PalabraController@indexbuscar')->name('buscar.index');
Route::resource('sabores', PalabraController::class);
Route::get('/sabores',  'PalabraController@indexSabores')->name('sabores.index');
Route::get('/palabra',  'PalabraController@indexFamilia')->name('palabra.index');
Route::get('/colores',  'PalabraController@indexColores')->name('colores.index');
Route::get('/partescasa',  'PalabraController@indexPartescasa')->name('partescasa.index');
Route::get('/partesdelcuerpo',  'PalabraController@indexPartescuerpo')->name('partescuerpo.index');
Route::get('/utilesescolares',  'PalabraController@indexUtilesescolares')->name('utilesescolares.index');
Route::get('/numeros',  'PalabraController@indexNumeros')->name('numeros.index');
Route::get('/animales',  'PalabraController@indexAnimales')->name('animales.index');
Route::get('/mesano',  'PalabraController@indexmesano')->name('mesano.index');
Route::get('/trasporte',  'PalabraController@indextrasporte')->name('trasporte.index');
Route::get('/profesionesyoficios',  'PalabraController@indexprofesion')->name('profesion.index');
Route::get('/frutas',  'PalabraController@indexfrutas')->name('frutas.index');
Route::get('/verduras',  'PalabraController@indexverduras')->name('verduras.index');
Route::get('/tiempo',  'PalabraController@indextiempo')->name('tiempo.index');
Route::get('/estadodeltiempo',  'PalabraController@indexEstadotiempo')->name('estadodeltiempo.index');
Route::resource('palabracateogria', PalabraCateogriaController::class);


//Route::get('/', function(){
 //   $nombre = "Jorge";
    
//return view('home')->with('nombre', $nombre);
//})->name('home');


//Route:: view('/','home'); //para paginas que no lleven demasiada informacion como terminos y condiciones privacidad etc.
//Auth::routes();

Auth::routes(['register'=>true]);


