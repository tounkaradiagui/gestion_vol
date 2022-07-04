@extends('layouts.master')

@section('title', 'Tableau de bord Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ###################################################################### -->

    <div class="row">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img src="{{asset('assets/images/B.jpg')}}" class="d-block w-100" height="500" width="100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('assets/images/C.jpg')}}" class="d-block w-100" height="500" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/D.jpg')}}" class="d-block w-100" height="500" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/E.jpg')}}" class="d-block w-100" height="500" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/F.jpg')}}" class="d-block w-100" height="500" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/G.jpg')}}" class="d-block w-100" height="500" alt="...">
                </div>
            </div>
        </div>
    </div>

</div>

@endsection