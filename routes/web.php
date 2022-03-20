<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::view('/', 'admin.index')->name('dashboard');

    Route::view('/admin/invoice', 'invoice.generateInvoice');
    Route::view('/register/user', 'auth.register')->name('register-user');
    Route::get('/manage/user', 'ManualAuth\RegisterController@showUser')->name('manage-user');
    Route::post('/register/user', 'ManualAuth\RegisterController@register')->name('user-register');

//    Route::resource('medicine', 'MedicineController');
    Route::get('medicine', 'MedicineController@index')->name('medicine');
    Route::post('medicine', 'MedicineController@store')->name('store-medicine');
    Route::get('/medicine/view', 'MedicineController@viewMedicine')->name('view-medicine');
    Route::post('/medicine/store', 'MedicineStockController@stockStore')->name('add-medicine-stock');

    //manufacturer
    Route::post('medicine-manufacturer', 'MedicineManufacturerController@store')->name('medicine-manufacturer');
    Route::get('/manufacturer', 'MedicineManufacturerController@index')->name('manufacturer-list');

    //invoice
    Route::get('/invoices', 'InvoiceBillController@createInvoices')->name('invoice');

    //search
    Route::get('/search', 'SearchMedicineController@index')->name('search');
    Route::get('/search/medicine', 'SearchMedicineController@search')->name('search-medicine');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
})->name('logout');

Auth::routes();
