<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth ::routes();

//Middleware para Auth
Route::middleware(['web'])->group(function () {
    // Aquí van las rutas de autenticación
    //Register
        Route::post('registro', 'App\Http\Controllers\Auth\RegisterController@create')->name('register');
        
    //--------
    //Login
        Route::post('/login', 'Auth\LoginController@login')->name('login');
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name('loginForm');
    //--------
    //logout
        //Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    //--------
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Perfil
Route::get('index/perfil','AdministradorController@index')->name('index.perfil');

Route::get('/Administrador/editar/{id}', 'AdministradorController@edit')->name('perfil.edit');

Route::put('/perfil/{id}', 'AdministradorController@update')->name('perfil.update');


//Reservas
Route::get('/administrador/reservas', function () {
    return view('administrador.reservas'); // Asegúrate de que la vista se encuentra en la ubicación correcta.
})->name('administrador.reservas');

// Ruta para acceder a la página de reservas
Route::get('/administrador/reservas', function () {
    return view('administrador.reservas'); // Asegúrate de que la vista de reservas se encuentre en la ubicación correcta.
})->name('administrador.reservas');

Route::get('/reservas/events', 'ReservasController@events')->name('reservas.events');
