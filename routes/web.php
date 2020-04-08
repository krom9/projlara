<?php

use Illuminate\Support\Facades\Auth;
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
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home.index');

Route::namespace('Test')
    ->group(function () {
        Route::resource('tests','TestController');
        Route::get('tests/{test}/result', 'TestController@result')->name('tests.result');

        Route::prefix('tests/{test}')
            ->group(function (){
                Route::resource('answers', 'AnswerController');
                Route::post('answers/write/{answer}/asks', 'AnswerController@write')->name('answers.write');

                Route::prefix('answers/{answer}')
                    ->group(function (){
                        Route::resource('asks', 'AskController');
                    });
            });
    });

//Route::
////    prefix('tests')
////    ->name('tests.')
//    namespace('Test')
//    ->group(function(){
////            Route::resource('/','TestController');
//    Route::get('/', 'TestController@index')->name('index');
//    Route::get('/create', 'TestController@create')->name('create');
//    Route::get('/{test}', 'TestController@show')->name('show');
//    Route::post('/', 'TestController@store')->name('store');
//    Route::get('/{test}/edit', 'TestController@edit')->name('edit');
//    Route::patch('/{test}', 'TestController@update')->name('update');
//    Route::delete('/delete/{test}', 'TestController@destroy')->name('delete');
//    Route::get('/{test}/result', 'TestController@result')->name('result');
//
//    Route::prefix('/{test}/answers')
//        ->name('answers.')
//        ->group(function(){
//            Route::get('/', 'AnswerController@index')->name('index');
//            Route::get('/create', 'AnswerController@create')->name('create');
//            Route::get('/{answer}', 'AnswerController@show')->name('show');
//            Route::post('/', 'AnswerController@store')->name('store');
//            Route::get('/{answer}/edit', 'AnswerController@edit')->name('edit');
//            Route::patch('/{answer}', 'AnswerController@update')->name('update');
//            Route::delete('/delete/{answer}', 'AnswerController@destroy')->name('delete');
//            Route::post('/write/{answer}/asks', 'AnswerController@write')->name('write');
//
//            Route::prefix('/{answer}/asks')
//                ->name('asks.')
//                ->group(function(){
//                    Route::get('/', 'AskController@index')->name('index');
//                    Route::get('/create', 'AskController@create')->name('create');
//                    Route::get('/{ask}', 'AskController@show')->name('show');
//                    Route::post('/', 'AskController@store')->name('store');
//                    Route::get('/{ask}/edit', 'AskController@edit')->name('edit');
//                    Route::patch('/{ask}', 'AskController@update')->name('update');
//                    Route::delete('/delete/{ask}', 'AskController@destroy')->name('delete');
//                });
//
//        });
//
//});



