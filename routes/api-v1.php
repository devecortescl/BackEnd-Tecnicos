<?php

use Illuminate\Http\Request;
use App\models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HardwareController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// rutas api clientes

Route::post('insertClients', [ClientController::class, 'insert'])->name('v1.clients.store');
Route::get('showClients', [ClientController::class, 'index'])->name('v1.clients.index');
Route::get('showClients/{id}', [ClientController::class, 'show'])->name('v1.clients.show');
Route::put('updateClients/{id}', [ClientController::class, 'update'])->name('v1.clients.update');
Route::delete('deleteClients/{id}', [ClientController::class, 'delete'])->name('v1.clients.delete');



// rutas api hardware
Route::post('insertHardware', [HardwareController::class, 'insert'])->name('v1.hardware.store');
Route::get('showHardware', [HardwareController::class, 'index'])->name('v1.hardware.index');
Route::get('showHardware/{id}', [HardwareController::class, 'show'])->name('v1.hardware.show');
Route::put('updateHardware/{id}', [HardwareController::class, 'update'])->name('v1.hardware.update');
Route::delete('deleteHardware/{id}', [HardwareController::class, 'delete'])->name('v1.hardware.delete');

// rutas api Reports
Route::post('insertReports', [ReportController::class, 'insert'])->name('v1.reports.store');
Route::get('showReports', [ReportController::class, 'index'])->name('v1.reports.index');
Route::get('showReports/{id}', [ReportController::class, 'show'])->name('v1.reports.show');
Route::put('updateReports/{id}', [ReportController::class, 'update'])->name('v1.reports.update');
Route::delete('deleteReports/{id}', [ReportController::class, 'delete'])->name('v1.reports.delete');




// rutas api users
Route::post('insertUsers', [UserController::class, 'insert'])->name('v1.users.store');
Route::get('showUsers', [UserController::class, 'index'])->name('v1.users.index');
Route::get('showUsers/{id}', [UserController::class, 'show'])->name('v1.users.show');
Route::put('updateUsers/{id}', [UserController::class, 'update'])->name('v1.users.update');
Route::delete('deleteUsers/{id}', [UserController::class, 'delete'])->name('v1.users.delete');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');

});