<?php

use Illuminate\Http\Request;
use App\models\Client;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ClientController;
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