<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('cli', function (){
//   Artisan::call('make:migration', ['--create' => 'director_demands', 'name' => 'create_director_demands_table']);
//    Artisan::call('migrate:reset');
//     Artisan::call('config:cache');
//     Artisan::call('cache:clear');

//    Artisan::call('session:flush');
//    Artisan::call('make:mail RendezVousConfirmee');

//    Artisan::call('make:model', ['name' => 'DirectorDemand']);
//    Artisan::call('migrate');
//    Artisan::call('make:controller', ['name' => 'MobileController']);
//    Artisan::call('make:policy', ['name' => 'CommissionPolicy']);
    /*Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');*/
//    Artisan::call('make:middleware',['name'=>'CabekToken']);

});

Route::get('migrate', function (){
//      Artisan::call('make:model Responsable --migration --controller --resource');
//    Artisan::call('migrate:fresh');
//        Artisan::call('migrate');
    //  Artisan::call('migrate:rollback');
    //   Artisan::call('make:controller World_citieController --model=World_cities');

});


Route::get('/', function () {
    return redirect()->route('accueil');
})->name('home');

Route::get('index', function () {
    return redirect()->route('accueil');
});


Route::get('entreprise', function () {
    return view('Entreprise');
})->name('entreprise');

Route::get('service', function () {
    return view('Service');
})->name('service');


Route::get('contact', function () {
    return view('Contact');
})->name('contact');


Route::get('accueil', function () {
    return view('Accueil');
})->name('accueil');


Route::get('client', function () {
    return view('Client');
})->name('client');

Route::get('competences', function () {
    return view('competences');
})->name('compétences');

Route::get('determination-valeur', function () {
    return view('determination-valeur');
})->name('determination');

Route::get('analyse-mecanique', function () {
    return view('analyse-rupture-mecanique');
})->name('analyse');

Route::get('estimation-dommage', function () {
    return view('estimation-dommage');
})->name('estimation');

Route::get('machine', function () {
    return view('machine');
})->name('machine');


Route::post('dossier','DossierController@dossier') ->name('dossier');
Route::get('/s/{code}', 'DossierController@dossierDirectLink')->name('dossier_direct');
//Route::get('dossier', function (){
//    return abort(403);
//});

Route::post('test', 'DossierController@download')->name('pdf');

Route::get('blog', function () {
    return view('Blog');
})->name('blog');

//reclamation
Route::get('reclamations/inbox','ReclamationController@inbox')->name('inbox');
Route::get('reclamations/sent','ReclamationController@sent')->name('sent');
Route::resource('/reclamations', 'ReclamationController');
Route::resource('/typereclamations', 'TypeReclamationController');

//gestion de rendez vous
Route::get('rendezvous/priserendezvous','PriseRendezVousController@priserendezvous')->name('priserendezvous');
Route::resource('/rendezvous','PriseRendezVousController');




Route::get('/fullcalendar', 'FullCalendarController@index')->name('fullcalendar');

Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');

Route::post('/event-store', 'EventController@store')->name('routeEventStore');

Route::delete('/event-destroy', 'EventController@destroy')->name('routeEventDelete');

Route::POST('/available_date/{id} ', 'FullCalendarController@available_date')->name('available_date');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('rendezvous');


