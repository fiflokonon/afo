@extends('layouts.app')
@section('title', 'Liste de générations')
@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <h3 class="text-lg-center mb-3">Liste des générations</h3>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('addgeneration') }}"class="btn btn-primary" style="width: 150px; height: 100px">
                        <div style="position: relative; top: 10px;">
                            <i class="fa fa-plus"></i>
                            Nouvelle génération
                        </div>
                    </a>
                </div>
                @if($generations != null)
                    @foreach($generations as $generation)
                        @php
                            shuffle($colors);
                            $color = $colors[0];
                        @endphp
                        <div class="col-md-4 mb-4">
                            <div class="card {{ $color }}">
                                <div class="card-body text-light">
                                    <h5 class="card-title">Génération du {{$generation->date_arrive}}</h5>
                                    <ul>
                                        <li><b>Effectif:</b> {{ $generation->effectif }}</li>
                                        <li><b>Race:</b> {{ $generation->race }}</li>
                                        <li><b>Poids moyen:</b> {{ $generation->poids_moyen }} kg</li>
                                    </ul>
                                    <div class="d-flex justify-content-between">
                                        <div class="btn-group" role="group">
                                            <a href="#"><button type="button" class="btn btn-custom"><i class="fa fa-bar-chart">Evolution</i></button></a>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('rapportlist', ['id' => $generation->id]) }}"><button type="button" class="btn btn-custom"><i class="fa fa-comment"></i>Rapports</button></a>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <a href="#"><button type="button" class="btn btn-custom"><i class="fa fa-trash"></i>Retirer</button></a>
                                        </div>
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
            background-color: {{ $color }};
            color: white;
        }

        .btn-custom:hover {
            background-color: black;
        }
    </style>
@endsection
