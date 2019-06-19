<?php

Route::group(['namespace' => 'Patient'], function() {

  //  Route::get('patient','PatientController@show');
Route::get('/', 'HomeController@index')->name('patient.dashboard');
    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('patient.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('patient.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('patient.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('patient.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('patient.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('patient.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('patient.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('patient.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('patient.verification.verify');

});