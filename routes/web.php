<?php

use App\Http\Controllers\ReservationController;
use App\Models\Reservation as ModelsReservation;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('reservation',[App\Http\Controllers\Admin\ReservationController::class, 'index']);
    Route::get('ajouter-reservation',[App\Http\Controllers\Admin\ReservationController::class, 'create']);
    Route::post('ajouter-reservation',[App\Http\Controllers\Admin\ReservationController::class, 'store']);
    Route::get('delete-reservation/{reservation_id}', [App\Http\Controllers\Admin\ReservationController::class, 'destroyy']);

    Route::get('vol',[App\Http\Controllers\Admin\volController::class, 'indice']);
    Route::get('ajouter-vol',[App\Http\Controllers\Admin\volController::class, 'ajouter']);
    Route::post('ajouter-vol',[App\Http\Controllers\Admin\volController::class, 'storre']);
    Route::get('edit-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'edit']);
    Route::put('update-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'update']);
    Route::get('delete-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'destroy']);
    
});

