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

Route::get('designpatterns/observer', 'DesignPatterns\ObserverController');

Route::get('designpatterns/factory-method/classic', 'DesignPatterns\FactoryMethodController@classicApproach');

Route::get('designpatterns/factory-method/new', 'DesignPatterns\FactoryMethodController@newApproach');

Route::get('designpatterns/simple-factory', 'DesignPatterns\SimpleFactoryController');

Route::get('designpatterns/abstract-factory', 'DesignPatterns\AbstractFactoryController');
