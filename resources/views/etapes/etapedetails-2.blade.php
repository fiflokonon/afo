@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 2: L'élevage des poussins</strong><br></p>
                <p><b>Durée: 7 jours</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                <p>Les poussins sont placés dans des installations spécialement conçues où les conditions environnementales, telles que la température, l'humidité et l'éclairage, sont soigneusement contrôlées pour assurer leur bien-être et leur croissance optimale.</p>
                <p>Pour tout ce qui concerne la l’alimentation et la santé, il faut faire recours au vétérinaire du système.</p>
                <p>En ce qui concerne l’alimentation, il faut qu’elle soit  spéciale, adaptée aux besoins nutritionnels des poussins de chair. Ces aliments sont formulés pour fournir une teneur élevée en protéines, des vitamines et des minéraux essentiels pour favoriser une croissance rapide et saine. Les poussins ont un accès constant à de l'eau fraîche et propre pour assurer leur hydratation.</p>
                <p>Pendant cette période d'élevage initial, les éleveurs surveillent attentivement la santé et le comportement des poussins. Ils veillent à ce que les poussins soient actifs, qu'ils se nourrissent correctement et qu'ils ne montrent aucun signe de maladie ou de détresse. Des mesures préventives sont prises pour minimiser les risques de maladies, telles que la vaccination contre certaines infections courantes.</p>
                <p>Les couvoirs veillent également à ce que les conditions environnementales soient optimales pour les poussins. Ils ajustent la température en fonction de l'âge des poussins, car ceux-ci ont besoin de chaleur supplémentaire dans les premiers jours et semaines de leur vie. Un éclairage adéquat est également fourni pour simuler les cycles jour/nuit naturels.</p>
            </div>
            <div>
                <div><span class="text-black fw-bolder">Résumé:</span></div>
                <p class="text-dark">La deuxième étape de l'élevage du poulet de chair consiste à élever les poussins dans des couvoirs spécialisés, en leur fournissant une alimentation adaptée, un environnement contrôlé et une surveillance attentive pour assurer leur croissance saine et leur bien-être.</p>
            </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
