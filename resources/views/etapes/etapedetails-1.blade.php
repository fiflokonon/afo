@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 1: Sélection des poussins</strong><br></p>
                <p><b>Durée: 21 jours</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                La première étape de l'élevage du poulet de chair commence par la sélection des poussins. Faites appel à des éleveurs spécialisés pour vous aider à  choisir avec soin les poussins de race appropriée provenant de couvoirs spécialisés. Faites le vous-même si vous vous y connaissez !
                <br>Ces poussins sont sélectionnés en fonction de caractéristiques telles que :
                <ul>
                    <li>leur potentiel de croissance rapide,</li>
                    <li>adaptabilité aux conditions d'élevage intensif,</li>
                    <li>qualité de viande,</li>
                    <li>Taille, force, santé et vitalité.</li>
                </ul>
                <p>
                    Transportés les vers votre exploitation avicole où ils seront élevés. Durant ce transport, des mesures spéciales sont prises pour assurer leur sécurité, leur confort et leur bien-être. Ils sont maintenus dans des conditions de température contrôlée et bénéficient d'une ventilation adéquate pour prévenir tout stress thermique.
                </p>
                <div>
                    <div><span class="text-black fw-bolder">Résumé:</span></div>
                    <p>La première étape de l'élevage du poulet de chair implique la sélection minutieuse des poussins de race appropriée, en tenant compte de leur potentiel de croissance rapide et de leur santé. Cela garantit que le fait que vous commencez avec des poussins sains, vigoureux et dotés des caractéristiques génétiques requis pour une croissance optimale.</p>
                </div>
            </div>
        </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
