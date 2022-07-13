@extends('layouts.master')

@section('title', 'Détails du vol')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">

       <h4>Détails du vol</h4>

    </div>

    <div class="card-body">
        

        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Code vol</th>
                    <th>Depart</th>
                    <th>Heure</th>
                    <th>Destination</th>
                    <th>Nb A</th>
                    <th>Nb B</th>
                    <th>Prix A</th>
                    <th>Prix B</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    
                    <td>{{$lastsone->code_vol}}</td>
                    <td>{{$lastsone->date_depart}}</td>
                    <td>{{$lastsone->heure_depart}}</td>
                    <td>{{$lastsone->destination}}</td>
                    <td>{{$lastsone->Nb_places_A}}</td>
                    <td>{{$lastsone->Nb_places_B}}</td>
                    <td>{{$lastsone->prix_classe_A}}</td>
                    <td>{{$lastsone->prix_classe_B}}</td>
                </tr>
        
            </tbody>
        </table>


        <table class="table table-bordered">
            <thead class="bg-dark" style="color: #fff;">
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Code vol</th>
                    <th>Depart</th>
                    <th>Heure</th>
                    <th>Destination</th>
                    <th>Nb A</th>
                    <th>Nb B</th>
                    <th>Prix A</th>
                    <th>Prix B</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    
                    <td>{{$lastsone->code_vol}}</td>
                    <td>{{$lastsone->date_depart}}</td>
                    <td>{{$lastsone->heure_depart}}</td>
                    <td>{{$lastsone->destination}}</td>
                    <td>{{$lastsone->Nb_places_A}}</td>
                    <td>{{$lastsone->Nb_places_B}}</td>
                    <td>{{$lastsone->prix_classe_A}}</td>
                    <td>{{$lastsone->prix_classe_B}}</td>
                </tr>
               
            </tbody>
        </table>

    </div>
</div>
    
</div>
@endsection



