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

Route::get('/objectives/{id}/complete', 'ObjectiveController@getMarkAsComplete')
        ->name('objectives.complete');

Route::post('/objectives/{id}/complete', 'ObjectiveController@postMarkAsComplete');

Route::get('/my-objectives', 'PageController@myObjectives')
        ->name('my-objectives');

Route::get('/core-competencies', 'PageController@coreCompetencies')
    ->name('core-competencies');
