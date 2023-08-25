<?php

use App\Http\Livewire\Employees;
use App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
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
//     return view('login');
// });

//Route::get('/employees', 'HomeController@index')->name('employees');
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
    // Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    // Route::get('/dashboard', 'HomeController@statistic')->name('dashboard');
    Route::get('/dashboard', 'HomeController@statistic')->name('dashboard');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/employees0', function () {
    //     return view('employees0');
    // })->name('employees0');

        Route::get('/profile', function () {
            return view('profile');
        })->name('profile');

    Route::get('/employees0','HomeController@index')->name('employees0');
    // Route::get('/employee/{id}', 'HomeController@profile')->name('employee.profile');
    Route::get('/employee/{id}', 'HomeController@show')->name('employee.show');
    Route::get('/Equipe', 'HomeController@showEquipe')->name('Equipe');

    // Route::get('/employee/{id}', EmployeeProfile::class)->name('employee.profile');
    // Route::get('/employee/{id}', [Profile::class, 'mount'])->name('employee.profile');
    // Route::get('/employee/{id}', [Profile::class, 'mount'])->name('employee.profile');
    // Route::get('/employee/{id}', 'HomeController@profile')->name('employee.profile');


    // Route::get('/profile/{id}', function ($employeeId) { return view('profile', compact('$employeeId') ); });
    // Route::view('/profile','profile') ;

    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login.redirect');

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

