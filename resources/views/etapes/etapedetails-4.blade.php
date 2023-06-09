@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 4: L’alimentation</strong><br></p>
                <p><b>Durée: Tout au long du cycle d'élevage (45 jours)</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                <p>La quatrième étape de l'élevage du poulet de chair se concentre sur l'alimentation des oiseaux pour favoriser leur croissance rapide et leur développement optimal. Les poulets de chair reçoivent une alimentation spéciale et équilibrée tout au long de leur cycle d'élevage.</p>
                <p>Utilisez des aliments formulés spécifiquement pour les poulets de chair, connus sous le nom de « rations » et disponibles dans les kiosques de ventes d’aliment  pour poulet chaire. Ces rations sont soigneusement élaborées pour répondre aux besoins nutritionnels des oiseaux à chaque étape de leur croissance. Elles contiennent des ingrédients tels que des céréales (comme le maïs et le blé), des protéines (telles que le soja), des matières grasses, des vitamines et des minéraux.</p>
                <p>Les ouvriers doivent fournirent aux poulets de chair un accès constant à l'alimentation. En plus de l'alimentation principale, les poulets de chair peuvent recevoir des suppléments nutritionnels, tels que des vitamines ou des additifs pour améliorer la santé, la résistance aux maladies ou la qualité de la viande.</p>
                <p>Les éleveurs surveillent attentivement l'alimentation des poulets de chair et ajustent les rations en fonction des besoins spécifiques. Ils s'assurent que les oiseaux ont un accès constant à de l'eau fraîche et propre, car une hydratation adéquate est essentielle pour une croissance saine.</p>
            </div>
            <div>
                <div><span class="text-black fw-bolder">Résumé:</span></div>
                <p class="text-dark">La quatrième étape de l'élevage du poulet de chair consiste à fournir une alimentation spéciale et équilibrée pour favoriser la croissance rapide et la santé des oiseaux. Les éleveurs utilisent des rations formulées spécifiquement, riches en protéines et en nutriments essentiels, et fournissent un accès constant à l'alimentation et à l'eau. Cette étape est essentielle pour soutenir la croissance musculaire et le développement optimal des poulets de chair.</p>
            </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
