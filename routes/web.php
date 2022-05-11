<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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


Route::get('/my-tickets',[TicketController::class,'index'] )->name('index');

Route::get('/new-ticket', function(){
    return view('new_ticket');
});

Route::post('/new-ticket', [TicketController::class,'store'] )->name('store');



Route::get('/show-ticket/{id}', [TicketController::class,'show'] )->name('show');
