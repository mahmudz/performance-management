<?php

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/logout', 'HomeController@logout')
        ->name('logout');

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::resource('objectives', 'ObjectiveController');
Route::get('objectives/{id}/delete', 'ObjectiveController@delete')
        ->name('objectives.delete');

Route::get('/create-objective', 'PageController@createObjective')
        ->name('create-objective');
// Route::get('/core-competencies', 'HomeController@index')
//     ->name('core-competencies');

// Route::get('/home', 'HomeController@index')
//     ->name('home');
