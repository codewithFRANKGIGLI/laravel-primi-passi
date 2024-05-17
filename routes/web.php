<?php

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
    $data = [
        'name'=> 'Rocky',
        'lastname'=>'Balboa',
        'age'=>'32',
        'email'=>'rockybalboa@gmail.com',
        'phone'=>'123456789',
        'address'=>'Calle 123',
        'city'=>'Bogota',
        'country'=>'Colombia',
        'postal_code'=>'123456',
        'website'=>'www.rockybalboa.com',
    ];
    return view('home', $data);
});
