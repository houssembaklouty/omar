<?php

Route::group(['namespace' => 'Secretaire'], function() {

    Route::get('/', 'HomeController@index')->name('secretaire.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('secretaire.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('secretaire.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('secretaire.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('secretaire.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('secretaire.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('secretaire.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('secretaire.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('secretaire.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('secretaire.verification.verify');

});