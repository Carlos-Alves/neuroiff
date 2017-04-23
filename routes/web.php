<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

$this->get('/', 'NeuroiffController@home')->name('home');
$this->get('/home', 'NeuroiffController@home')->name('home');

$this->get('cadastrar', 'UserController@register');
$this->post('new-user', 'UserController@registring');
$this->get('logout', 'UserController@logout');
$this->get('perfil', 'UserController@profile')->name('profile');
$this->post('profile-update', 'UserController@profileUpdate')->name('profile.update');

$this->get('endereco', 'QuestionariosController@endereco');
$this->get('social', 'QuestionariosController@social');
$this->get('moradia', 'QuestionariosController@moradia');
$this->get('responsavel', 'QuestionariosController@responsavel');



Route::resource('/pacientes', 'PacienteController', ['names' => [
    'index' => 'neuroiff.pacientes.index',
    'create' => 'neuroiff.pacientes.create',
    'store' => 'neuroiff.pacientes.store',
    'edit' => 'neuroiff.pacientes.edit',
    'show' => 'neuroiff.pacientes.show'
]]);


Auth::routes();



