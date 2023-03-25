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

////////////////////////Guest/////////////////////////
Route::get('/', function () {
    return view('welcome');
});


Route::get('/regis', function () {
    return view('autentikasiguest/regis');
});

Route::get('/login', function () {
    return view('autentikasiguest/login');
});

Route::get('/konfirpmbyrn', function () {
    return view('autentikasiguest/konfirpmbyrn');
});


////////////////////////Cabang/////////////////////////
Route::get('/home', function () {
    return view('cabang/home');
});

Route::get('/usulevent', function () {
    return view('cabang/usulevent');
});

Route::get('/uploadberita', function () {
    return view('cabang/uploadberita');
});

Route::get('/uploadmateri', function () {
    return view('cabang/uploadmateri');
});

Route::get('/buatsertif', function () {
    return view('cabang/buatsertif');
});


////////////////////////Member/////////////////////////
Route::get('/landingpage', function () {
    return view('member/landingpage');
});

Route::get('/infoberita', function () {
    return view('member/infoberita');
});

Route::get('/jadwalwebinar', function () {
    return view('member/jadwalwebinar');
});

Route::get('/quiz', function () {
    return view('member/quiz');
});

Route::get('/downloadmateri', function () {
    return view('member/downloadmateri');
});

Route::get('/downloadsertif', function () {
    return view('member/downloadsertif');
});

////////////////////////Admin Apk/////////////////////////

Route::get('/dashboard', function () {
    return view('adminapk/dashboard');
});

Route::get('/profile', function () {
    return view('adminapk/profile');
});

Route::get('/editprofile', function () {
    return view('adminapk/editprofile');
});

Route::get('/datacabang', function () {
    return view('adminapk/datacabang');
});

Route::get('/datapimpinan', function () {
    return view('adminapk/datapimpinan');
});

Route::get('/datakonfirpembayaran', function () {
    return view('adminapk/datakonfirpembayaran');
});

////////////////////////Pimpinan/////////////////////////

Route::get('/dashboardpimpinan', function () {
    return view('pimpinan/dashboardpimpinan');
});

Route::get('/profilpimpinan', function () {
    return view('pimpinan/profilpimpinan');
});

Route::get('/editprofil', function () {
    return view('pimpinan/editprofil');
});

Route::get('/listusulanevent', function () {
    return view('pimpinan/listusulanevent');
});

?>

