@extends('layouts.master')

@section('title', 'Vol')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">

        <h4>La liste de vols
            <a href="{{ url('admin/ajouter-vol')}}" class="btn btn-primary btn-sm float-end" >Enregistrer  un vol</a>
        </h4>

    </div>

    <div class="card-body">
        @if (session('message'))
            <div class="alert alert-success" >{{session('message')}}</div>
        @endif

        <table id="myDataTable" class="table table-bordered">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Code vol</th>
                    <th>Date de depart</th>
                    <th>Destination</th>
                    <th>Nb places A</th>
                    <th>Nb places B</th>
                    <th>Prix classe A</th>
                    <th>Prix classe B</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vol as $item)
                <tr>
                    <!-- <td>{{ $item->id }}</td> -->
                    <td>{{ $item->code_vol }}</td>
                    <td>{{ $item->date_depart }}</td>
                    <td>{{ $item->destination }}</td>
                    <td>{{ $item->Nb_places_A }}</td>
                    <td>{{ $item->Nb_places_B }}</td>
                    <td>{{ $item->prix_classe_A }}</td>
                    <td>{{ $item->prix_classe_B }}</td>
                    <td>
                        <a href="{{url('admin/edit-vol/'.$item->id)}}" class="btn btn-success btn-sm" >Modifier</a>
                    </td>
                    <td>
                        <a href="{{url('admin/delete-vol/'.$item->id)}}" class="btn btn-danger btn-sm" >Supprimer</a>
                    </td>
                    <td>
                        <a href="{{url('admin/details-vol/'.$item->id)}}" class="btn btn-primary btn-sm" >Détails</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
    
</div>
@endsection