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

/*
*=====
*
* DISCIPLINE ROUTE
*
*====
*/

/*
    Route::get('disciplinas', ['as' => 'disciplina.index', 'uses' => 'DisciplineController@index'])->name('disciplina.index');
    Route::get('disciplinas/create', ['as' => 'disciplina.create', 'uses' => 'DisciplineController@create'])->name('disciplina.create');
    Route::get('disciplinas/{id}/edit', ['as' => 'disciplina.edit', 'uses' => 'DisciplineController@edit'])->name('disciplina.edit');
    Route::get('disciplinas/{id}', ['as' => 'disciplina.show', 'uses' => 'DisciplineController@show'])->name('disciplina.show');

    Route::post('disciplina', 'DisciplineController@store')->name('disciplina.store');
    Route::put('disciplinas/{id}', 'DisciplineController@update')->name('disciplina.update');
    Route::delete('disciplinas/{id}', 'DisciplineController@destroy')->name('disciplina.destroy');
*/

Route::get('/', ['uses' => 'HomeController@index'])->name('index');

// CRUD STUFF
Route::resource('disciplines', 'DisciplineController');
Route::resource('classrooms', 'ClassroomController');
Route::resource('students', 'StudentController');
Route::resource('teachers', 'TeacherController');

// USER

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);

});

