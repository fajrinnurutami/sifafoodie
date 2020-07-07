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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('index');
});

Route::get('/afterregister', function () {
    return view('afterregister');
});

Route::get('/afterorder', function () {
    return view('afterorder');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/checkorder', function () {
    return view('checkorder');
});

Route::get('cateringpdf','CateringController@cateringPDF');
Route::get('supplierpdf','SupplierController@supplierPDF');
Route::get('datarekappdf','FormcateringController@rekapPDF');
Route::get('paymentpdf','PaymentController@paymentPDF');

Route::resource('katcat','KatcatController')->middleware('auth');
Route::resource('bank','BankController')->middleware('auth');
Route::resource('supplier','SupplierController')->middleware('auth');
Route::resource('waktu','WaktuController')->middleware('auth');
Route::resource('catering','CateringController')->middleware('auth');
Route::resource('formcatering','FormCateringController')->middleware('auth');
Route::resource('payment','PaymentController')->middleware('auth');
Route::resource('member','MemberController')->middleware('auth');
Route::get('daftar','CateringController@daftarMenu')->middleware('auth');
Route::get('rekap','FormCateringController@rekapPesanan')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
