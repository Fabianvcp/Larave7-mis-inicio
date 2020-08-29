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

Route::get('contactame',function (){

    return "Seccion de contactos";
})->name('contactos');

Route::get('/', function (){
    echo "<a href='".route('contactos')."'> Contactos 1</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 2</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 3</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 4</a><br> ";
    echo "<a href='".route('contactos')."'> Contactos 5</a><br> ";
});
Route::get('/', function () {
    $nombre = "Fabian";
    return view('home', compact('nombre') );
})->name('home');

*/

Route::view('/','home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

//Route::view('/portfolio', 'portfolio',compact('portfolio'))->name('portfolio');
Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');

//Actualizar datos se usa patch
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//Route::view('/contact', 'contact')->name('contact');

Route::get('/contacto', 'MessagesController@index' )->name('contact');
Route::post('/contacto', 'MessagesController@store' )->name('messages.store');
