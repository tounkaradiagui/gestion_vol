@extends('layouts.master')

@section('title', 'Modifier utilisateurs')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Modifier utilisateurs
                <a href="{{ url('admin/users')}}" class="btn btn-primary btn-sm float-end" >Retour</a>
            </h4>
        </div>

        <div class="card-body">
                    
            @if (session('message'))
                <div class="alert alert-success" >{{session('message')}}</div>
            @endif

            
            <div class="mb-3">
                <label for="">Nom complet</label>
                <input class="form-control" type="text" name="name" value="{{ $user->name }}">
            </div>
            
            <div class="mb-3">
                <label for="">Adresse email</label>
                <input class="form-control" type="text" name="email" value="{{ $user->email }}">
            </div>

            <div class="mb-3">
                <label for="">Créer le</label>
                <input class="form-control" type="text" name="created_at" value="{{ $user->created_at->format('d/m/y') }}">
            </div>

            <form action="{{url('admin/update-user/' .$user->id)}}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Rôle comme</label>
                    <select name="role_as" class="form-control mb-3">
                        <option value="1" {{$user->role_as == '1' ? 'selected':''}}>Admin</option>
                        <option value="0" {{$user->role_as == '0' ? 'selected':''}}>User</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
                
            </form>

        </div>
    </div>
    
</div>
@endsection