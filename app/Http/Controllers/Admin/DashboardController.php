<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\vol;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    
    {
        $reservations = Reservation::count();
        $vols = vol::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();

        return view('admin.dashboard', compact('reservations', 'vols', 'users', 'admins'));
    }

    
}
