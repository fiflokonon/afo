@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 3: L'élevage des poussins</strong><br></p>
                <p><b>Durée: 14 jours</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                <p>La troisième étape de l'élevage du poulet de chair consiste à réaménager le bâtiment  de manière à fournir des conditions optimales pour la croissance et le développement des poulets de chair.</p>
                <div>
                    <p>Pour cela il faut:</p>
                    <ul>
                        <li>Nettoyés en profondeur ;</li>
                        <li>Désinfectés pour éliminer toute trace d'infections potentielles ;</li>
                        <li>Mettre les litières dans le bâtiment pour offrir un environnement propre et confortable pour les poussins. La litière, généralement composée de matériaux tels que la paille, la sciure de bois ou les copeaux de bois, aide à absorber les excréments des poulets et à maintenir une hygiène adéquate.</li>
                    </ul>
                </div>
                <p>Une fois les bâtiments prêts, les poussins sont transportés avec précaution depuis les couvoirs vers les poulaillers. Pendant le transfert, des mesures sont prises pour minimiser le stress des poussins et garantir leur bien-être. Les systèmes de ventilation sont ajustés pour maintenir une circulation d'air adéquate et évacuer l'excès d'humidité du bâtiment.</p>
                <p>Veillez à ce qu'ils aient un accès constant à de l'eau fraîche et propre, ainsi qu'à une alimentation adaptée à leur stade de croissance. Les systèmes d'alimentation automatique sont souvent utilisés pour distribuer l'alimentation de manière contrôlée et régulière. </p>
                <p>Les couvoirs veillent également à ce que les conditions environnementales soient optimales pour les poussins. Ils ajustent la température en fonction de l'âge des poussins, car ceux-ci ont besoin de chaleur supplémentaire dans les premiers jours et semaines de leur vie. Un éclairage adéquat est également fourni pour simuler les cycles jour/nuit naturels.</p>
            </div>
            <div>
                <div><span class="text-black fw-bolder">Résumé:</span></div>
                <p class="text-dark">La troisième étape de l'élevage du poulet de chair implique le transfert des poussins des couvoirs vers les bâtiments d'élevage spécialement préparés. Cette étape vise à assurer une transition en douceur pour les poussins, en créant des conditions optimales d'environnement et de gestion dans les bâtiments d'élevage. Les éleveurs continuent de surveiller de près les poulets de chair, en veillant à leur alimentation, à leur hygiène et à leur bien-être général.</p>
            </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
