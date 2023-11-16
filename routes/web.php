<?php

use Illuminate\Support\Facades\Route;

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
    $name = 'Ugo';
    $lastname = 'De Ughi';
    $stampaParagrafo = false;
    $num1 = 5;
    $num2 = 5;
    $colori = ['giallo','verde','blu','arancione','rosso','ciclamino'];
    // $data = [
    //     'name' => $name,
    //     'lastname' => $lastname
    // ];
    // compact crea un array con le chiavi/valori che vengono passati
    return view('home', compact('name','lastname','stampaParagrafo', 'num1', 'num2','colori'));
});

Route::get('/about', function () {
    return view('about');
});

