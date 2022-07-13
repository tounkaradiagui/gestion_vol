<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReservationFormRequest;
use App\Models\Reservation;
use App\Models\vol;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();
        return view('admin.reservation.index', compact('reservation'));

    }

    public function create()
    {
        $vols = vol::all();
        return view('admin.reservation.create', compact('vols'));

    }

    public function store(ReservationFormRequest $request)
    {
        $data = $request->validated();

        $reservation = new Reservation;
        $reservation->nom = $data['nom'];
        $reservation->prenom = $data['prenom'];
        $reservation->num_piece = $data['num_piece'];
        $reservation->sexe = $data['sexe'];
        $reservation->classe = $data['classe'];
        $reservation->code_vol = $data['code_vol'];

        $reservation->save();
        return redirect('admin/reservation')->with('message', 'Reservation prise en compte avec succès');

    
    }

    public function destroyy(Request $request)
    {
        $reservation = Reservation::find($request->reservation_delete_id);
        if($reservation)
        {
            $reservation->delete();
            return redirect('admin/reservation')->with('message', 'reservation supprimé avec succès');

        }
        else
        {
            return redirect('admin/reservation')->with('message', 'Aucune reservation trouvé');

        }
    }
}
