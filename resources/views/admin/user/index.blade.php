@extends('layouts.master')

@section('title', 'Utilisateurs')

@section('content')

<!-- Modal de suppression de vols-->

<div class="modal fade" id="deletemodale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('admin/delete-reservation')}}" method="POST">
                @csrf
                <div class="modal-header" style="background-color: #467fd0;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="reservation_delete_id" id="reservation_id">
                    <h5>Voulez-vous vraiment supprimer cette reservation ?</h5>
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
            <h4>La liste des utilisateurs</h4>
        </div>

        <div class="card-body">
                    
            @if (session('message'))
                <div class="alert alert-success" >{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <!-- <th>Sexe</th> -->
                        <th>Role</th>
                        <th>Modifier</th>
                        <!-- <th>Supprimer</th>
                        <th>Détails</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <!-- <td>{{ $item->sexe }}</td> -->
                            <td>{{ $item->role_as == '1' ?  'Admin':'User'}}</td>
                            <td>
                                <a href="{{url('admin/users/'.$item->id)}}" class="btn btn-success btn-sm" >Modifier</a>
                                <!-- <button type="submit" class="btn btn-danger btn-sm deletereservationBtn" value="{{$item->id}}" >Supprimer</button> -->
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    
</div>
@endsection

@section('scriptt')

    <script>
        $(document).ready(function(){

            // first method
            // $('.deletevolbtn').click(function(e){
                // e.preventDefault();

            // the second one.
            $(document).on('click', '.deletereservationBtn', function(e){
            e.preventDefault();

                var reservation_id = $(this).val();
                $('#reservation_id').val(reservation_id);
                $('#deletemodale').modal('show');
            });
        });
    </script>


@endsection()