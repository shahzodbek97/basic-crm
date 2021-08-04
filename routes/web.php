<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\KaseController;
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

//Accounts
Route::get('/account/list', [AccountController::class, 'index']);
Route::get('/account/store', [AccountController::class, 'store']);
Route::get('/account/delete/{id}', [AccountController::class, 'destroy']);
Route::get('/account/update/{id}', [AccountController::class, 'edit']);

//Contract
Route::get('/contract/list', [ContractController::class, 'index']);
Route::get('/contract/store', [ContractController::class, 'store']);
Route::get('/contract/delete/{id}', [ContractController::class, 'destroy']);
Route::get('/contract/update/{id}', [ContractController::class, 'edit']);

//Contact
Route::get('/contact/list', [ContactController::class, 'index']);
Route::get('/contact/store', [ContactController::class, 'store']);
Route::get('/contact/delete/{id}', [ContactController::class, 'destroy']);
Route::get('/contact/update/{id}', [ContactController::class, 'edit']);

//Opportunity
Route::get('/opportunity/list', [OpportunityController::class, 'index']);
Route::get('/opportunity/store', [OpportunityController::class, 'store']);
Route::get('/opportunity/delete/{id}', [OpportunityController::class, 'destroy']);
Route::get('/opportunity/update/{id}', [OpportunityController::class, 'edit']);

//Kase
Route::get('/kase/list', [KaseController::class, 'index']);
Route::get('/kase/store', [KaseController::class, 'store']);
Route::get('/kase/delete/{id}', [KaseController::class, 'destroy']);
Route::get('/kase/update/{id}', [KaseController::class, 'edit']);
