@extends('layouts.master')

@section('title', 'Vol')

@section('content')

<div class="container-fluid px-4">

    @if (session('message'))
        <div class="alert alert-success" >{{session('message')}}</div>
    @endif

    <div class="row">
        
   
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Modifier un Vol</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif

        <form action="{{ url('admin/update-vol/'.$vol->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="">Code Vol</label>
                <input type="text" name="code_vol" value="{{ $vol->code_vol }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Date de Départ</label>
                <input type="time" name="date_depart" id="" value="{{$vol->date_depart}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Heure de Départ</label>
                <input type="date" name="heure_depart" id="" value="{{$vol->heure_depart}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Destination</label>
                <input type="text" name="destination" id="" value="{{$vol->destination}}"  class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Nombre de place A</label>
                <input type="text" name="Nb_places_A" id="" value="{{$vol->Nb_places_A}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Nombre de place B</label>
                <input type="text" name="Nb_places_B" id="" value="{{$vol->Nb_places_B}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Prix classe A</label>
                <input type="text" name="prix_classe_A" id="" value="{{$vol->prix_classe_A}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Prix classe B</label>
                <input type="text" name="prix_classe_B" id="" value="{{$vol->prix_classe_B}}" class="form-control">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Valider</button>
            </div>
        </form>

        </div>
    </div>
    
</div>
@endsection