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

Route::group(['middleware' => 'auth'], function () {
   //DEPARTAMENTOS
   Route::resource('departamentos','DepartamentosController');
   Route::get('departamentos_create','DepartamentosController@store')->name('departamentos_create');
   Route::get('/departamentos_delete/{id}', 'DepartamentosController@destroy')->name('departamentos_delete');
   Route::get('/departamentos_edit', 'DepartamentosController@update')->name('departamentos_edit'); 
   //SECCIONES 
   Route::resource('secciones','SeccionesController');
   Route::get('secciones_create','SeccionesController@store')->name('secciones_create');
   Route::get('/secciones_delete/{id}', 'SeccionesController@destroy')->name('secciones_delete');
   Route::get('/secciones_edit', 'SeccionesController@update')->name('secciones_edit');
   //CARRERAS
   Route::resource('carreras','CarrerasController');
   Route::get('carreras_create','CarrerasController@store')->name('carreras_create');
   Route::get('/carreras_delete/{id}', 'CarrerasController@destroy')->name('carreras_delete');
   Route::get('/carreras_edit', 'CarrerasController@update')->name('carreras_edit');
    //PERIODOS
    Route::resource('periodos','PeriodosController');
    Route::get('periodos_create','PeriodosController@store')->name('periodos_create');
    Route::get('/periodos_delete/{id}', 'PeriodosController@destroy')->name('periodos_delete');
    Route::get('/periodos_edit', 'PeriodosController@update')->name('periodos_edit');
    //AREAS
    Route::resource('areas','AreasController');
    Route::get('areas_create','AreasController@store')->name('areas_create');
    Route::get('/areas_delete/{id}', 'AreasController@destroy')->name('areas_delete');
    Route::get('/areas_edit', 'AreasController@update')->name('areas_edit');
    //INSCRIPCION
    Route::resource('inscripcion','InscripcionController');
    Route::get('inscripcion_create','InscripcionController@store')->name('inscripcion_create');
    Route::get('/inscripcion_delete/{id}', 'InscripcionController@destroy')->name('inscripcion_delete');
    Route::get('/inscripcion_edit', 'InscripcionController@update')->name('inscripcion_edit');
    //MATERIAS
    Route::resource('materias','MateriasController');
    Route::get('materias_create','MateriasController@store')->name('materias_create');
    Route::get('/materias_delete/{id}', 'MateriasController@destroy')->name('materias_delete');
    Route::get('/materias_edit', 'MateriasController@update')->name('materias_edit');
    //PNF
    Route::resource('pnf','PnfController');
    Route::get('pnf_create','PnfController@store')->name('pnf_create');
    Route::get('/pnf_delete/{id}', 'PnfController@destroy')->name('pnf_delete');
    Route::get('/pnf_edit', 'PnfController@update')->name('pnf_edit');
    //TRAYECTOS
    Route::resource('trayectos','TrayectosController');
    Route::get('trayectos_create','TrayectosController@store')->name('trayectos_create');
    Route::get('/trayectos_delete/{id}', 'TrayectosController@destroy')->name('trayectos_delete');
    Route::get('/trayectos_edit', 'TrayectosController@update')->name('trayectos_edit');
    //ESTUDIANTES
    Route::resource('datosbasicos','DatosbasicosController');
    Route::get('datosbasicos_create','DatosbasicosController@store')->name('datosbasicos_create');
    Route::get('/datosbasicos_delete/{id}', 'DatosbasicosController@destroy')->name('datosbasicos_delete');
    Route::get('/datosbasicos_edit', 'DatosbasicosController@update')->name('datosbasicos_edit');
     //CARGA ACADEMICA
     Route::resource('personal','PersonalHasAsignaturaController');
     Route::get('personal_create','PersonalHasAsignaturaController@store')->name('personal_create');
     Route::get('/personal_delete/{id}','PersonalHasAsignaturaController@destroy')->name('personal_delete');
     Route::get('/personal_edit','PersonalHasAsignaturaController@update')->name('personal_edit');
});

