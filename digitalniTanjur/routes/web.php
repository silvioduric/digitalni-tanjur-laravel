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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/admin', 'Admin\AdminController@index')->name('admin');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('meni', 'MeniController');
Route::resource('vinska', 'VinskaController');
Route::resource('recenzije', 'RecenzijeController');


// Route::resource('admin', 'AdminController')->middleware(['auth', 'roles.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'roles.admin'])->name('admin.')->group(function(){
    Route::resource('/', 'AdminController');

    // Teme rute
    Route::resource('/tema', 'TemeController');

    // Korisnici rute
    Route::resource('/korisnici', 'KorisniciController')->except(['show', 'create', 'store']);
    Route::get('/korisnici/{id}/editIme', 'KorisniciController@editIme')->name('korisnici.editIme');
    Route::put('/korisnici/{id}/updateIme', 'KorisniciController@updateIme')->name('korisnici.updateIme');
    Route::get('/korisnici/{id}/editPrezime', 'KorisniciController@editPrezime')->name('korisnici.editPrezime');
    Route::put('/korisnici/{id}/updatePrezime', 'KorisniciController@updatePrezime')->name('korisnici.updatePrezime');
    Route::get('/korisnici/{id}/editEmail', 'KorisniciController@editEmail')->name('korisnici.editEmail');
    Route::put('/korisnici/{id}/updateEmail', 'KorisniciController@updateEmail')->name('korisnici.updateEmail');
});

Route::namespace('Moderator')->prefix('moderator')->middleware(['auth', 'roles.moderator'])->name('moderator.')->group(function(){
    Route::resource('/', 'ModeratorController');

    // Stolovi rute
    Route::resource('/stolovi', 'StoloviController');
    Route::get('/stolovi/{stolovi}/status', 'StoloviController@status')->name('stolovi.status');
    Route::put('/stolovi/{stolovi}', 'StoloviController@statusUpdate')->name('stolovi.statusUpdate');
    Route::get('/stolovi/create', 'StoloviController@create')->name('stolovi.create');
    Route::put('/stolovi/store/novi', 'StoloviController@store')->name('stolovi.store.novi');
    Route::post('/stolovi/{stolovi}/update', 'StoloviController@update')->name('stolovi.update');
    Route::get('/stolovi/{stolovi}/delete', 'StoloviController@delete')->name('stolovi.delete');

    // Meni rute
    Route::resource('/meni', 'MeniController');
    Route::get('/meni/{id}/create', 'MeniController@create')->name('meni.create');
    Route::put('/meni/store/{id}/novi', 'MeniController@store')->name('meni.store.novi');
    Route::get('/meni/{id}/delete', 'MeniController@delete')->name('meni.delete');

    // Vinska rute
    Route::resource('/vinska', 'VinskaController');
    Route::get('/vinska/{id}/create', 'VinskaController@create')->name('vinska.create');
    Route::put('/vinska/store/{id}/novi', 'VinskaController@store')->name('vinska.store.novi');
    Route::get('/vinska/{id}/delete', 'VinskaController@delete')->name('vinska.delete');

    // Kuponi rute
    Route::resource('/kuponi', 'KuponiController');
    Route::get('/kuponi/{id}/editNaziv', 'KuponiController@editNaziv')->name('kuponi.editNaziv');
    Route::put('/kuponi/{id}/updateNaziv', 'KuponiController@updateNaziv')->name('kuponi.updateNaziv');
    Route::get('/kuponi/{id}/editOpis', 'KuponiController@editOpis')->name('kuponi.editOpis');
    Route::put('/kuponi/{id}/updateOpis', 'KuponiController@updateOpis')->name('kuponi.updateOpis');
    Route::get('/kuponi/{id}/editBodovi', 'KuponiController@editBodovi')->name('kuponi.editBodovi');
    Route::put('/kuponi/{id}/updateBodovi', 'KuponiController@updateBodovi')->name('kuponi.updateBodovi');
    Route::get('/kuponi/{id}/delete', 'KuponiController@delete')->name('kuponi.delete');
    Route::put('/kuponi/store/novi', 'KuponiController@store')->name('kuponi.store.novi');

    // Rezervacije rute
    Route::resource('/rezervacije', 'RezervacijaController');
    Route::get('/rezervacije/{id}/delete', 'RezervacijaController@delete')->name('rezervacije.delete');
});


Route::namespace('Korisnik')->prefix('korisnik')->middleware(['auth', 'roles.korisnik', 'verified'])->name('korisnik.')->group(function(){
    Route::resource('/', 'KorisnikController');

    // Rezervacije
    Route::resource('/rezervacije', 'RezervacijaController');
    Route::get('/rezervacije/create', 'RezervacijaController@create')->name('rezervacije.create');
    Route::put('/rezervacije/store/novi', 'RezervacijaController@store')->name('rezervacije.store.novi');
    Route::get('/rezervacije/{id}/delete', 'RezervacijaController@delete')->name('rezervacije.delete');

    // Recenzije
    Route::resource('/recenzije', 'RecenzijeController');
    Route::get('/recenzije/create', 'RecenzijeController@create')->name('recenzije.create');
    Route::put('/recenzije/store/novi', 'RecenzijeController@store')->name('recenzije.store.novi');

    // Kuponi
    Route::resource('/kuponi', 'KuponiController');
    Route::get('/popisKupona', 'KuponiController@popis')->name('kuponi.popis');
    Route::get('/{id}/kupovina', 'KuponiController@kupovina')->name('kuponi.kupovina');
    Route::put('/kuponi/store/{id}/novi', 'KuponiController@store')->name('kuponi.store.novi');

    // Kuponi
    Route::resource('/poruke', 'PorukaController');
    Route::get('/poruke/create', 'PorukaController@create')->name('poruke.create');
    Route::put('/poruke/store//novi', 'PorukaController@store')->name('poruke.store.novi');
    Route::get('/poruke/{id}/delete', 'PorukaController@delete')->name('poruke.delete');
});

// Route::resource('moderator', 'ModeratorController')->middleware(['auth', 'roles']);