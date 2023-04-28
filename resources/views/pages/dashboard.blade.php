
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Dashboard</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-primary py-2 bg-warning">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Nombre total de génération</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>$40,000</span></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-success py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Membres de votre équipe</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>$215,000</span></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-info py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Mortalité globale</span></div>
                                    <div class="row g-0 align-items-center">
                                        <div class="col-auto">
                                            <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow border-start-warning py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Pending Requests</span></div>
                                    <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-9">
                    <div class="card shadow mb-4" style="border-radius: 14px;">
                        <div class="card-body">
                            <div class="text-center fw-bolder fs-3">Suivez votre investissement</div>
                            <div class="my-5"></div>
                            <div class="row text-center mb-2">
                                <div class="col-sm-6">
                                    <a href="{{ route('new-generation') }}"><button class="btn btn-primary rounded-2"><i class="fa fa-plus"></i> Créer une nouvelle génération</button></a>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <a href="{{ route('generationlist') }}"><button class="btn btn-danger rounded-2"><i class="fa fa-table"></i> Liste des générations</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xl-3" >
                    <div class="card shadow mb-4 text-center" style="border-radius: 14px;">
                        <div class="card-body">
                           <b>Vous travaillez avec plusieurs personnes</b>
                            <div class="m-5"></div>
                            <a href="{{ route('userlist') }}"><button class="btn btn-secondary">Administrer</button></a>
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
