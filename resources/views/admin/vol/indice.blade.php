@extends('layouts.master')

@section('title', 'Vol')

@section('content')

<!-- Modal de suppression de vols-->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('admin/delete-vol')}}" method="POST">
                @csrf
                <div class="modal-header" style="background-color: #467fd0;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="vol_delete_id" id="vol_id">
                    <h5>Voulez-vous vraiment supprimer ce vol ?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Non</button>
                    <button type="submit" class="btn btn-danger">Oui</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                    <td>{{ $item->heure_depart }}</td>
                    <td>{{ $item->destination }}</td>
                    <td>{{ $item->Nb_places_A }}</td>
                    <td>{{ $item->Nb_places_B }}</td>
                    <td>{{ $item->prix_classe_A }}</td>
                    <td>{{ $item->prix_classe_B }}</td>
                    <td>
                        <a href="{{url('admin/edit-vol/'.$item->id)}}" class="btn btn-success btn-sm" >Modifier</a>
                    </td>
                    <td>
                        <!-- <a href="{{url('admin/delete-vol/'.$item->id)}}" class="btn btn-danger btn-sm" >Supprimer</a> -->
                        <button type="button" class="btn btn-danger btn-sm deletevolbtn" value="{{$item->id}}" >Supprimer</button>
                    </td>
                    <td>
                        <a href="{{url('admin/show-vol/'.$item->id)}}" class="btn btn-primary btn-sm" value="{{$item->id}}">Détails</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
    
</div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function(){

            // first method
            // $('.deletevolbtn').click(function(e){
                // e.preventDefault();

            // the second one.
            $(document).on('click', '.deletevolbtn', function(e){
            e.preventDefault();

                var vol_id = $(this).val();
                $('#vol_id').val(vol_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>


@endsection()