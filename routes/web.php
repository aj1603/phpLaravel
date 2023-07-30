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
    return view('welcome');
});

Route::get('/hi', function () {
    return ('welcome');
});

Route::get('/salam', function () {
    $json = '[
        {
            "message": "Senin name divesin gelyar",
            "name": "Jora",
            "surname": "Abdullavew",
            "password": "123456",
            "username": "Jora"
        },
        {
            "message": "Senin name divesin gelyar",
            "name": "Jora",
            "surname": "Abdullavew",
            "password": "123456",
            "username": "Jora"
        },
        {
            "message": "Senin name divesin gelyar",
            "name": "Jora",
            "surname": "Abdullavew",
            "password": "123456",
            "username": "Jora"
        }
    ]';

    $data = json_decode($json);

    return response($data);
});



Route::get('/uzat', function () {
    return response()->json(["mesage"=>"Sussumy basyar"]);
});