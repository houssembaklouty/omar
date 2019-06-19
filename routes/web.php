<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Nowsomething great!
|
*/

Route::get('/', function () {
    return view('acc');
});
Route::get('/log', function () {
    return view('log');
});

Route::get('secretaire', function () {
    return view('secretaire');
});
Route::get('login', function () {
    return view('login');
});
Route::get('omar', function () {
    return view('omar');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gererpatient', function () {
    return view('/medecin/patient/gererpatient');
});
Route::get('/listepatient', function () {
    return view('listepatient');
});

/*
Route::post('/modifPatient', function () {
    return view('modifPatient');
});
*/
/*
Route::get('/gererRdv', function () {
    return view('gererRdv');
});
*/
Route::get('/addRdv', function () {
    return view('addRdv');
});

Route::get('/nvOrd', function () {
    return view('nvOrd');
});

Route::get('/ProfilM', function () {
    return view('ProfilM');
});
Route::get('/ProfilMM', function () {
    return view('ProfilMM');
});
Route::get('/nvPatient', function () {
    return view('nvPatient');
});

Route::get('/modifPatient', function () {
    return view('modifPatient');
});
Route::get('/gererProfilMedical', function () {
    return view('gererProfilMedical');
});
Route::get('/patient', function () {
    dd('fffff');
    return view('/patient/index');
});
Route::get('/historiqueCons', function () {
    return view('historiqueCons');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/newCons', function () {
    return view('newCons');
});
Route::get('/IHMPatients', function () {
    return view('IHMPatients');
});
Route::get('/AjouterRdv', function () {
    return view('AjouterRdv');
});
Route::get('/mdf', function () {
    return view('Patient.modifPatient');
});
Route::get('rdv.create','RDVController@create');
Route::resource('rdv', 'RDVController');
Route::resource('Patient', 'PatientController');

Route::group(['prefix'=>'medecin',],function(){
    Route::get('/', function () {
        return view('medecin/index');
    });
Route::resource('antecedents', 'AntecedentController');
    Route::resource('Ordonance', 'OrdonanceController');
    Route::resource('Lettre', 'LettreController');

Route::get('/nv_ord/{IDpatient}', 'ConsultationController@nv_ord')->name('Consultation.nv_ord');
Route::get('/ProfilMed/{id}', 'PatientController@profilMed')->name('Patient.profilMed');
    Route::resource('Consultation', 'ConsultationController');
    Route::resource('Patient', 'PatientController');
    Route::get('Patient/{id}', 'PatientController@profilM');

    Route::resource('Certificat', 'CertificatController');
/*    
    Route::get('/gererpatient', 'PatientController@index')->name('gerer.patient.index');
    Route::post('/ajouter_patient','PatientController@create');

    Route::get('/ordonance', 'OrdonanceController@ordonance');
*/


    Route::get('/downloadPDF/{id}','OrdonanceController@downloadPDF');
    Route::get('/downloadPDF/{id}','LettreController@downloadPDF');
    Route::post('/submitForm','OrdonanceController@store');
    Route::get('/vueOrd','OrdonanceController@index');
});


Route::get('/ordonance', 'ordonanceController@ordonance');


/*Route::post('/modifPatient','PatientController@update')->name('update');*/


Route::put('/modifPatient/{id}','PatientController@update');


/* Route::post('/Patient.index','PatientController@index');*/


Route::resource('/Patient', 'PatientController');

Route::get('/allPatients', 'PatientController@allPatients')->name('listepatients');
Route::get('/index', 'PatientController@indexx')->name('index');

  
/*Route::get('/AjouterRdv','EventController@create');
Route::post('/AjouterRdv','EventController@store');
*/

Route::get('/IHMPatients','PatientController@index');



Route::post('event/add','EventController@store');

Route::get('/newRDV','EventController@newRDV');



Route::get('/gererRdv','EventController@calendar');


Route::get('/send/email', 'HomeController@mail');
Route::get('/lll',  'EventController@calender2');

//Route::get('/vueOrd','OrdonanceController@index')->middleware('auth','medecin','secretaire');