<?php

// blog.dev.com


Route::resource('/users', 'UsersController');


Route::get('/login', function(){

	return 'Formulario para iniciar sesión';

})->name('auth.login');