@extends('layouts.app')
@section('title', 'Liste des rapports')
@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <h3 class="text-lg-center mb-5">Les rapports de la Génération du {{ $generation->date_arrive }}</h3>
            <div class="row">
                <div class=" col-md-2 mb-5">
                    <a href="{{ route('new-rapport', ['id' => $generation->id]) }}"class="btn btn-info"style=" width: 120px; height: 100px">
                        <div style="position: relative; top: 30px;">
                            <i class="fa fa-plus text-light"></i>
                        </div>
                    </a>
                </div>
                @foreach($rapports as $rapport)
                    <div class="col-md-2">
                        <div class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal{{ $rapport->id }}" style=" width: 120px; height: 100px">
                            <div style="position: relative; top: 30px;">
                                {{ $rapport->created_at->locale('fr_FR')->isoFormat('LL') }}
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="Modal{{ $rapport->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Rapport du {{ $rapport->created_at->locale('fr_FR')->isoFormat('LL') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>
                                                <b> Avec Mortalité:</b>
                                                @if($rapport->avec_mortalite)
                                                    Oui
                                                @else
                                                    Non
                                                @endif
                                            </li>
                                            <li>
                                                <b>Cause de la mortalité:</b>
                                                <br>
                                                @if($rapport->cause_mortalite)
                                                    {{ $rapport->cause_mortalite }}
                                                @else
                                                    Inconnue
                                                @endif
                                            </li>
                                            <li>
                                                <b>Poids Moyen(Kg):</b>
                                                @if($rapport->poids_moyen)
                                                    {{ $rapport->poids_moyen }}
                                                @else
                                                    Inconnu
                                                @endif
                                            </li>
                                            <li>
                                                <b>Commentaire:</b>
                                                <br>
                                                @if($rapport->commentaire)
                                                    {{ $rapport->commentaire }}
                                                @else
                                                    Pas de commentaires
                                                @endif
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="modal-footer">
                                        <div style="margin-right: 100px">Fait par {{ $rapport->user->first_name }} {{ $rapport->user->last_name }}, Un {{ $rapport->user->role->role }}</div>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </body>
@endsection
