<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortWalletController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [PortwalletController::class,'home'])->name('home');
Route::post('/payment',[PortwalletController::class,'payment'])->name('payment');
Route::get('/portwallet/portwallet_verify_transaction/',[PortwalletController::class,'portwalletVerifyTransaction']);
