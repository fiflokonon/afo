@extends('layouts.app')
@section('title', 'Liste de générations')
@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <p class="text-capitalize fs-1 fw-bold text-center text-black-50 mb-0" style="margin: 67px;"><strong>Erreur 404</strong>&nbsp;</p>
            <div class="container-fluid">
                <div class="text-center mt-5">
                    <p class="fs-4 text-center text-black-50 mb-0" style="margin: 12px;"><br>La page que vous recherchez actuellement n’est pas accessible pour le moment !<br><br></p>
                </div>
            </div><a class="btn btn-primary text-center bounce animated" role="button" style="text-align: justify;background: rgb(72,71,89);width: 275.188px;height: 48px;margin: 43px;padding: 13px 13px;" href="Acceuil.html">RETOU A LA PAGE D'ACCEUIL</a>
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
