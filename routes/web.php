<?php

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/events', function () {
        // Obtenemos los eventos de la base de datos
        $events = Event::all();

        // Asignamos la cabecera de nuestro datatable
        $heads = [
            'ID',
            'Nombre',
            'Descripción',
            'Estado',
            'Tipo',
            'Fecha'
        ];

        // Retornamos la vista con las 2 variables creadas anteriormente
        return view('events', compact('events', 'heads'));
    })->name('events');

    Route::get('/events/create', function () {
        return view('events-create');
    })->name('events.create');
});
