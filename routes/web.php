<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CampaignController;
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

// Route::get('/lead/list', 'App\Http\Controllers\LeadController@index');

//Lead
Route::get('/lead/list', [LeadController::class, 'index']);
Route::get('/lead/store', [LeadController::class, 'store']);
Route::get('/lead/delete/{id}', [LeadController::class, 'destroy']);
Route::get('/lead/update/{id}', [LeadController::class, 'edit']);

//Campaign 
Route::get('/campaign/list', [CampaignController::class, 'index']);
Route::get('/campaign/store', [CampaignController::class, 'store']);
Route::get('/campaign/delete/{id}', [CampaignController::class, 'destroy']);
Route::get('/campaign/update/{id}', [CampaignController::class, 'edit']);


