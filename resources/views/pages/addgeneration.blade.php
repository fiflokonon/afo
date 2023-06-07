@extends('layouts.app')

@section('title', 'Création d\'une nouvelle génération')

@section('content')
    <body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Nouvelle génération</h4>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="user" method="POST" action="{{ route('addgeneration') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Race" name="race"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="number" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Effectif" name="effectif"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="number" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Poids moyen en (kg)" name="poids"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="date" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Date d'arrivée" name="date_arrivee"></div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
