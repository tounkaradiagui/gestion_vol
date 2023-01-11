<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Reservation;
use App\Models\vol;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::user();

        if($users->role_as = '1')
        {
            $reservations = Reservation::count();
            $vols = vol::count();
            $users = User::where('role_as','0')->count();
            $admins = User::where('role_as','1')->count();

        return view('admin.dashboard', compact('reservations', 'vols', 'users', 'admins'));

        }

        elseif ($users->role_as == '0')
        {
            return view('user.dashboard');
        }

        else{
            return redirect('/');
        }

    }
}
