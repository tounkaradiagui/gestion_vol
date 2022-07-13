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
            <h4 class="">Enregistrer un Vol</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif

        <form action="{{ url('admin/ajouter-vol') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Code Vol</label>
                <input type="text" name="code_vol" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Date de Départ</label>
                <input type="date" name="date_depart" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Heure de Départ</label>
                <input type="time" name="heure_depart" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Destination</label>
                <input type="text" name="destination" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Nombre de place A</label>
                <input type="text" name="Nb_places_A" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Nombre de place B</label>
                <input type="text" name="Nb_places_B" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Prix classe A</label>
                <input type="text" name="prix_classe_A" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Prix classe B</label>
                <input type="text" name="prix_classe_B" id="" class="form-control">
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>

        </div>
    </div>
    
</div>
@endsection