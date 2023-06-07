@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="video-container">
                <div class="video-container justify-content-center" style="">
                    <p class="text-center" style="">Flux de vidéo surveillance</p><video width="853" height="480" loop="" controls="" style="margin: 2px;padding: 26px;"></video>
                </div>
            </div>
        </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
