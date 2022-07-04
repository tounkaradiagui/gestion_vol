<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\VolFormRequest;
use App\Models\vol;



class volController extends Controller
{
    public function indice()
    {
        $vol = vol::all();
        return view('admin.vol.indice', compact('vol'));
    }

    public function ajouter()
    {
        return view('admin.vol.ajouter');
    }

    public function storre(VolFormRequest $request)
    {
        $data = $request->validated();

        $vol = new vol;
        $vol->code_vol = $data['code_vol'];
        $vol->date_depart = $data['date_depart'];
        $vol->destination = $data['destination'];
        $vol->Nb_places_A = $request['Nb_places_A'];
        $vol->Nb_places_B = $request['Nb_places_B'];
        $vol->prix_classe_A = $data['prix_classe_A'];
        $vol->prix_classe_B = $data['prix_classe_B'];

        $vol->save();


        return redirect('admin/vol')->with('message', 'Vol enregistrer avec succès');
    }

    public function edit($vol_id)
    {
        $vol = vol::find($vol_id);
        return view('admin.vol.edit', compact('vol'));
    }

    public function update(VolFormRequest $request, $vol_id)
    {
        $data = $request->validated();

        $vol = vol::find($vol_id);
        $vol->code_vol = $data['code_vol'];
        $vol->date_depart = $data['date_depart'];
        $vol->destination = $data['destination'];
        $vol->Nb_places_A = $request['Nb_places_A'];
        $vol->Nb_places_B = $request['Nb_places_B'];
        $vol->prix_classe_A = $data['prix_classe_A'];
        $vol->prix_classe_B = $data['prix_classe_B'];

        $vol->update();


        return redirect('admin/vol')->with('message', 'Vol modifié avec succès');

    }

    public function destroy($vol_id)
    {
        $vol = vol::find($vol_id);
        if($vol)
        {
            $vol->delete();
            return redirect('admin/vol')->with('message', 'Vol supprimé avec succès');

        }
        else
        {
            return redirect('admin/vol')->with('message', 'Aucun vol trouvé');

        }
    }


}
