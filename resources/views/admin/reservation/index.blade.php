@extends('layouts.master')

@section('title', 'Reservation')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>La liste de passagers ayant reservés un vol
                <a href="{{ url('admin/ajouter-reservation')}}" class="btn btn-primary btn-sm float-end" >Reserver un vol</a>
            </h4>
        </div>

        <div class="card-body">
                    
            @if (session('message'))
                <div class="alert alert-success" >{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Classe</th>
                        <th>Code vol</th>
                        <th>Modifier</th>
                        <!-- <th>Supprimer</th>
                        <th>Détails</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservation as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->prenom }}</td>
                            <td>{{ $item->sexe }}</td>
                            <td>{{ $item->classe }}</td>
                            <td>{{ $item->code_vol }}</td>
                            <td>
                                <a href="{{url('admin/delete-reservation/'.$item->id)}}" class="btn btn-danger btn-sm" >Supprimer</a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    
</div>
@endsection