<?php

use App\Http\Controllers\ReservationController;
use App\Models\Reservation as ModelsReservation;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;



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

    // Route::get('delete-reservation/{reservation_id}', [App\Http\Controllers\Admin\ReservationController::class, 'destroyy']);
    Route::post('delete-reservation', [App\Http\Controllers\Admin\ReservationController::class, 'destroyy']);

    Route::get('vol',[App\Http\Controllers\Admin\volController::class, 'indice']);
    Route::get('ajouter-vol',[App\Http\Controllers\Admin\volController::class, 'ajouter']);
    Route::post('ajouter-vol',[App\Http\Controllers\Admin\volController::class, 'storre']);
    Route::get('edit-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'edit']);
    Route::put('update-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'update']);
    Route::get('show-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'show']);


    // Route::get('delete-vol/{vol_id}', [App\Http\Controllers\Admin\volController::class, 'destroy']);
    Route::post('delete-vol', [App\Http\Controllers\Admin\volController::class, 'destroy']);

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('users/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'modifier']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    
});


Route::get('/booking', [App\Http\Controllers\Frontend\BookingController::class, 'index'])->name('booking.index');