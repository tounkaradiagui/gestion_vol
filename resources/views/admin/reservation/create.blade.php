@extends('layouts.master')

@section('title', 'Reservation')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        
        <div class="card-header">
            <h4 class="">Ajouter une reservation</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error )
                        <div>{{$error}}</div>
                    @endforeach
                </div> 
            @endif

            
            <form action="{{url('admin/ajouter-reservation')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="">Nom</label>
                    <input type="text" name="nom" id="" class="form-control">
                    
                </div>

                <div class="mb-3">
                    <label for="">Prénom</label>
                    <input type="text" name="prenom" id="" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Numéro de pièce</label>
                    <input type="text" name="num_piece" id="" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Sexe</label>
                    <select name="sexe" id="" class="form-control">
                        <option value="">------Choisir sexe--------</option>
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Féminin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Classe</label>
                    <select name="classe" id="" class="form-control">

                        <option value="">-----------Selectionner classe----------</option>
                        <option value="classe A">Classe A</option>
                        <option value="classe B">Classe B</option>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Code vol</label>
                    <select name="code_vol" id="" class="form-control">
                        @foreach ($vols as $vol )
                            <option value="{{$vol->id}}">{{$vol->code_vol}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>

            </form>

        </div>

    </div>
    
</div>
@endsection