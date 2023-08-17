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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/employees', 'HomeController@index')->name('employees');
Route::get('/employee/{id}', 'HomeController@show')->name('employee.show');
Route::get('/create/employee', 'HomeController@create')->name('employee.create');
Route::post('/add/employee', 'HomeController@store')->name('employee.store');
Route::get('/edit/employee/{id}', 'HomeController@edit')->name('employee.edit');
Route::put('/update/employee/{id}', 'HomeController@update')->name('employee.update');
Route::delete('/delete/employee/{id}', 'HomeController@delete')->name('employee.delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return redirect('/');
//     });
// });