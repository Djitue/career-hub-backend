<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
$router->get('/login/{role}', 'AuthController@login');
$router->post('/register/{role}', 'AuthController@register');
$router->get('/admin/users', 'AdminController@manageUsers');
$router->get('/employer/jobs', 'EmployerController@viewPostedJobs');
$router->post('/employer/job/{id}/edit', 'EmployerController@editJob');
