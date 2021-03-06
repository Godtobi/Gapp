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
    return redirect("/home");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth'],'namespace' => 'App\Http\Controllers'],function () {
    Route::resource("companies","CompanyController");
    Route::resource("employees","EmployeeController");
    Route::resource("users","UserController");
    Route::get("mycompany","CompanyController@authCompany");
    Route::get("myemployees","EmployeeController@authEmployees");
});
