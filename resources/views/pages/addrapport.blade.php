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
                            <form class="user" method="POST" action="{{ route('addrapport', ['id' => $id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mortalite_option" id="mortalite_option_1" value="1" checked>
                                    <label class="form-check-label" for="mortalite_option_1">
                                        Avec mortalité
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mortalite_option" id="mortalite_option_2" value="0">
                                    <label class="form-check-label" for="mortalite_option_2">
                                        Sans mortalité
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-user" type="number" placeholder="Mortalité" name="mortalite" id="mortalite" style="display: none;">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-user" type="text" placeholder="Cause de mortalité" name="cause_mortalite" id="cause_mortalite" style="display: none;">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-user" type="number" placeholder="Poids moyen en (kg)" name="poids">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-user" type="text" placeholder="Commentaire" name="comment">
                                </div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Soumettre</button>
                            </form>
                            <!--<form class="user" method="POST" action="{{ route('addrapport', ['id' => $id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3"><input class="form-control form-control-user" type="number" placeholder="Mortalité" name="mortalite"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Cause de mortalité" name="cause_mortalite"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="number" placeholder="Poids moyen en (kg)" name="poids"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" placeholder="Commentaire" name="comment"></div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Soumettre</button>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const radioButtons = document.querySelectorAll('input[type=radio][name=mortalite_option]');

        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', function() {
                if (this.value === '1') {
                    document.getElementById('mortalite').style.display = 'block';
                    document.getElementById('cause_mortalite').style.display = 'block';
                } else {
                    document.getElementById('mortalite').style.display = 'none';
                    document.getElementById('cause_mortalite').style.display = 'none';
                }
            });
        });
    </script>
    </body>
@endsection
