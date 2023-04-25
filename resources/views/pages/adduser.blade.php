@extends('layouts.app')

@section('title', 'Ajout d\'utilisateur')

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
                                <h4 class="text-dark mb-4">Ajouter un utilisateur</h4>
                            </div>
                            <form class="user" method="POST" action="{{ route('adduser') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Prénoms" name="first_name"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nom" name="last_name"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse Email" name="email"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Mot de passe" name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Confirmer mot de passe" name="password_confirmation"></div>
                                </div>
                                <div class="row mb-3">
                                    <select name="role" id="role" class="form-control form-control-user">
                                        <option selected disabled>Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" >{{ $role->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <!--<hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
                                <hr>-->
                            </form>
                            <!--<div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
