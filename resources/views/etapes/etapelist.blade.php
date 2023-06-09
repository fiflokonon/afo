@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <h3 class="fw-bold text-dark text-center" style="">Les étapes de l'élevage du poulet chair</h3>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails1') }}" style="text-decoration: none;"><br>Étape 1: Sélection des poussins<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style=""> La première étape de l'élevage du poulet de chair commence par la sélection des poussins. Faites appel à des éleveurs spécialisés pour vous aider à  choisir avec soin les poussins de race appropriée provenant de couvoirs spécialisés.
                    Faites le vous-même si vous vous y connaissez ! ....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails2') }}" style="text-decoration: none;"><br>Étape 2: L'élevage des poussins<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style="">Les poussins sont placés dans des installations spécialement conçues où les conditions environnementales, telles que la température, l'humidité et l'éclairage, sont soigneusement contrôlées pour assurer leur bien-être et leur croissance optimale....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails3') }}" style="text-decoration: none;"><br>Étape 3: L'élevage des poussins<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style="">La troisième étape de l'élevage du poulet de chair consiste à réaménager le bâtiment  de manière à fournir des conditions optimales pour la croissance et le développement des poulets de chair....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails4') }}" style="text-decoration: none;"><br>Étape 4: L’alimentation<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style="">La quatrième étape de l'élevage du poulet de chair se concentre sur l'alimentation des oiseaux pour favoriser leur croissance rapide et leur développement optimal. Les poulets de chair reçoivent une alimentation spéciale et équilibrée tout au long de leur cycle d'élevage.....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails5') }}" style="text-decoration: none;"><br>Étape 5: La gestion sanitaire<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style="">La cinquième étape de l'élevage du poulet de chair met l'accent sur la gestion sanitaire pour assurer la santé et le bien-être des oiseaux. Vous devez mettre en œuvre diverses pratiques et mesures préventives pour maintenir un environnement sain et minimiser les risques de maladies.....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails6') }}" style="text-decoration: none;"><br>Étape 6: La croissance<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style="">La sixième étape de l'élevage du poulet de chair concerne la croissance et l'élevage des oiseaux jusqu'à l'âge de la récolte, lorsque les poulets atteignent la taille et le poids appropriés pour la commercialisation...<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails7') }}" style="text-decoration: none;"><br>Étape 7: L’abattage<br></a></div>
                <p class="fs-6 fw-light text- text-dark" style="">La septième étape de l'élevage du poulet de chair concerne l'abattage et la transformation des oiseaux pour la préparation à la commercialisation et à la consommation. Cette étape est cruciale pour garantir la qualité et la sécurité des produits de volaille....<br>
                </p>
            </div>
        </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
