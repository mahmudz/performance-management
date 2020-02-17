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

Route::post('/objectives/{id}/approve', 'ObjectiveController@approve')
        ->name('objectives.approve');

Route::get('/objectives/{id}/deny', 'ObjectiveController@getMarkAsComplete')
        ->name('objectives.deny');

Route::get('/objectives/{id}/view-submission', 'ObjectiveController@viewSubmission')
        ->name('objectives.view-submission');

Route::post('/objectives/{id}/complete', 'ObjectiveController@postMarkAsComplete');

Route::get('/my-objectives', 'PageController@myObjectives')
        ->name('my-objectives');

Route::get('/core-competencies', 'PageController@coreCompetencies')
    ->name('core-competencies');

Route::post('/add-to-list', 'AjaxController@addToList')
        ->name('addToList');

Route::post('/remove-from-list', 'AjaxController@removeFromList')
        ->name('removeFromList');

Route::get('/submissons', 'PageController@submissons')
        ->name('submissons');

Route::get('/employees', 'PageController@employees')
        ->name('employees');
Route::get('/employees/{id}/show', 'PageController@showEmployee')
        ->name('employees.show');
