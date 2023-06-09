@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 6: La Croissance</strong><br></p>
                <p><b>Durée: Tout au long du cycle d'élevage (45 jours)</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                <p>La sixième étape de l'élevage du poulet de chair concerne la croissance et l'élevage des oiseaux jusqu'à l'âge de la récolte, lorsque les poulets atteignent la taille et le poids appropriés pour la commercialisation.</p>
                <p>Pendant cette étape, surveillez attentivement la croissance des poulets de chair. Veillez à ce que les oiseaux reçoivent une alimentation adéquate et équilibrée, en ajustant les rations en fonction de leur stade de croissance. Assurez-vous que les poulets ont accès à une alimentation en quantité suffisante pour favoriser une croissance rapide et une prise de poids optimale. Pendant cette phase, continuez de mettre en œuvre des pratiques de biosécurité et de gestion sanitaire rigoureuses de l’étape précédente.</p>
                <p>Lorsque les poulets atteignent l'âge de la récolte, ils sont prêts pour la phase finale de l'élevage. Planifiez et organisez la récolte des poulets conformément aux réglementations en vigueur, en veillant à ce que les procédures d'abattage et de transformation soient effectuées de manière sécurisée et respectueuse des normes de bien-être animal.</p>
            </div>
            <div>
                <div><span class="text-black fw-bolder">Résumé:</span></div>
                <p class="text-dark">La sixième étape de l'élevage du poulet de chair concerne la croissance et l'élevage des oiseaux jusqu'à l'âge de la récolte. Les éleveurs surveillent attentivement la croissance, fournissent une alimentation adéquate, maintiennent des conditions d'environnement optimales, mettent en œuvre des pratiques de biosécurité et de gestion sanitaire rigoureuses, et effectuent un suivi précis des performances des poulets. </p>
            </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
