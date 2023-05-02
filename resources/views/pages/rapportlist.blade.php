@extends('layouts.app')
@section('title', 'Liste des rapports')
@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="btn btn-danger"style=" width: 120px; height: 100px">
                        <div style="position: relative; top: 30px;">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
                @if(empty($rapports))
                    <div class="card bg-light">
                        <div class="card-body text-light">
                            <div class="d-flex justify-content-between">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach($rapports as $rapport)
                        <div class="col-md-4 mb-4">
                            <div class="card {{ $color }}">
                                <div class="card-body text-light">
                                    <h5 class="card-title">Génération du {{$generation->date_arrive}}</h5>
                                    <div class="d-flex justify-content-between">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    </body>
    <style>
        .btn-custom {
            background-color: azure;
            color: white;
        }

        .btn-custom:hover {
            background-color: black;
        }
    </style>
@endsection
