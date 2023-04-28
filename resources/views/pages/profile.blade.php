@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <h3 class="text-dark mb-4">Profil</h3>
            <div class="row mb-3">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="/uploads/profile_images/{{$user->profile_photo}}" width="160" height="160">
                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Modifier la photo</button></div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modifier la photo de profil</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="user" method="POST" action="{{ route('addphoto', ['id' => $user->id]) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <input class="form-control form-control-user" type="file" id="examplePhotoInput" name="photo">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card textwhite bg-primary text-white shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card textwhite bg-success text-white shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Informations d'Utilisateur</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('updateuser', ['id' => $user->id]) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="username"><strong>Role</strong></label>
                                                    <select name="role" class="form-control">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}> {{ $role->role }} </option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="email"><strong>Adresse e-mail</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" value="{{$user->email}}"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Prénoms</strong></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name" value="{{$user->first_name}}"></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Nom</strong></label><input class="form-control" type="text" id="last_name" placeholder="Doe" name="last_name" value="{{$user->last_name}}"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="city"><strong>Contact</strong></label><input class="form-control" type="text" id="city" placeholder="Phone" name="phone" value="{{$user->phone}}"></div>
                                            </div>
                                            <div class="col">
                                                @if($user->adresse)
                                                    <div class="mb-3"><label class="form-label" for="address"><strong>Adresse</strong></label><input class="form-control" type="text" id="address" name="adresse" value="{{$user->adresse}}"></div>
                                                @else
                                                    <div class="mb-3"><label class="form-label" for="address"><strong>Adresse</strong></label><input class="form-control" type="text" id="address" name="adresse" value="" placeholder="Pas d'adresse connue"></div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Mot de passe</strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                            <i class="fa fa-eye-slash" id="eyeIcon"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="password_confirmation"><strong>Confirmer mot de passe</strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Confirmer Mot de passe">
                                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                            <i class="fa fa-eye-slash" id="eyeIcon"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Enregistrer</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
