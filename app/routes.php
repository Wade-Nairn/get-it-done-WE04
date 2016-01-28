<?php

# routes.php

Route::get('/', CONTROLLERS.'home.php');

Route::get('/home', CONTROLLERS.'home.php');
Route::post('/home', CONTROLLERS.'home.php');

Route::get('/login', CONTROLLERS.'login.php');
Route::post('/login', CONTROLLERS.'login.php');

Route::get('/logout', CONTROLLERS.'logout.php');

Route::get('/register', CONTROLLERS.'register.php');
Route::post('/register', CONTROLLERS.'register.php');

Route::get('/new_project', CONTROLLERS.'new_project.php');
Route::post('/new_project', CONTROLLERS.'new_project.php');


Route::get('/archive', CONTROLLERS.'archive.php');
Route::post('/archive', CONTROLLERS.'archive.php');

Route::get('/archive/:slug', CONTROLLERS.'archive.php');
Route::post('/archive/:slug', CONTROLLERS.'archive.php');

Route::get('/task/:id', CONTROLLERS.'get_task.php');


Route::get('/task/:id/edit', CONTROLLERS.'edit_task.php');
Route::post('/task/:id/edit', CONTROLLERS.'edit_task.php');

Route::get('/new_task', CONTROLLERS.'new_task.php');
Route::post('/new_task', CONTROLLERS.'new_task.php');



Route::get('/:slug', CONTROLLERS.'main_tasks.php');
Route::post('/:slug', CONTROLLERS.'main_tasks.php');



Route::get('/:slug/delete_project', CONTROLLERS.'delete_project.php');
Route::post('/:slug/delete_project', CONTROLLERS.'delete_project.php');

Route::get('/:slug/edit_project', CONTROLLERS.'edit_project.php');
Route::post('/:slug/edit_project', CONTROLLERS.'edit_project.php');



Route::get('/:slug/task/:id/forward', CONTROLLERS.'progress_task.php');
Route::post('/:slug/task/:id/forward', CONTROLLERS.'progress_task.php');

Route::get('/:slug/task/:id/back', CONTROLLERS.'deprogress_task.php');
Route::post('/:slug/task/:id/back', CONTROLLERS.'deprogress_task.php');

Route::get('/:slug/task/:id/delete', CONTROLLERS.'delete_task.php');
Route::post('/:slug/task/:id/delete', CONTROLLERS.'delete_task.php');

Route::get('/:slug/new_task', CONTROLLERS.'new_task.php');
Route::post('/:slug/new_task', CONTROLLERS.'new_task.php');






Route::fallback(VIEWS.'404.php');
