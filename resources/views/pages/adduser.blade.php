@extends('layouts.app')

@section('title', 'Ajout d\'utilisateur')

@section('content')
    <body class="bg-gradient-primary">
    <div class="container w-50">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Ajouter un utilisateur</h4>
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
                            <form class="user" method="POST" action="{{ route('adduser') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user required" type="text" id="exampleFirstName" placeholder="Prénoms" name="first_name"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nom" name="last_name"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse Email" name="email"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Mot de passe">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <i class="fa fa-eye" id="eyeIcon"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control form-control-user" id="password" name="password_confirmation" placeholder=" Confirmer mot de passe">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="">
                                                <i class="fa fa-eye" id="eyeIcon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <select name="role" id="role" class="form-control form-control-user">
                                        <option selected disabled>Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" >{{ $role->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="tel" id="exampleTelInput" placeholder="Contact" name="phone"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="examplePhotoInput" placeholder="Addresse" name="adresse"></div>
                                </div>
                                <div class="row mb-3">
                                    <input class="form-control form-control-user" type="file" id="examplePhotoInput" name="photo">
                                </div>
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
