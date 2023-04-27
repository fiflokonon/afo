@extends('layouts.app')

@section('title', 'Liste des utilisateurs')

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <h3 class="text-dark mb-4">STAFF</h3>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Infos d'utilisateurs</p>
                </div>
                <div class="card-body">
                    <div class="text-lg-end">
                        <a href="{{ route('inscription') }}">
                            <button class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</button>
                        </a>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                            <tr>
                                <th>Nom et Prénoms</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td><img class="rounded-circle me-2" width="30" height="30"
                                             src="/uploads/profile_images/{{$user->profile_photo}}">{{$user->first_name}} {{$user->last_name}}
                                    </td>
                                    <td>{{$user->role->role}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('profile', ['id' => $user->id]) }}"><i class="fa fa-edit text-success m-1"></i></a>
                                            <a href="#"><i class="fa fa-trash m-1"></i></a>
                                            <a href="#"> <i class="fa fa-eye text-danger m-1"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td><strong>Nom et Prénoms</strong></td>
                                <td><strong>Role</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Actions</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
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



