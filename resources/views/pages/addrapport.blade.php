@extends('layouts.app')

@section('title', 'Faire un rapport')

@section('content')
    <body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url('/assets/img/dogs/image2.jpeg');"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Faire un rapport</h4>
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
                            <form class="user" method="POST" action="{{ route('addrapport') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3"><input class="form-control form-control-user" type="number" id="exampleInputEmail" placeholder="Mortalité" name="mortalite"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail"  placeholder="Cause de mortalité" name="cause_mortalite"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="number" id="exampleInputEmail"  placeholder="Poids moyen en (kg)" name="poids"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" placeholder="Commentaire" name="comment"></div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Soumettre</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
