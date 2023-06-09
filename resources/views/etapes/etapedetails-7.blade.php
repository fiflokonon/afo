@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 7: L’abattage</strong><br></p>
                <p><b>Durée: 1 jour</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                <p>La septième étape de l'élevage du poulet de chair concerne l'abattage et la transformation des oiseaux pour la préparation à la commercialisation et à la consommation. Cette étape est cruciale pour garantir la qualité et la sécurité des produits de volaille.</p>
                <p>Lorsque les poulets atteignent l'âge de récolte approprié, ils sont transférés vers les installations d'abattage. </p>
                <p>Une fois abattus, les poulets de chair passent par une série d'étapes de transformation. Tout d'abord, ils sont plumés pour retirer les plumes et préparer la carcasse pour les prochaines étapes. Ensuite, ils sont éviscérés pour enlever les organes internes, tels que le cœur, le foie et les intestins. </p>
                <p>Une fois l'inspection terminée, les poulets de chair sont refroidis pour abaisser leur température corporelle. Le refroidissement rapide est essentiel pour préserver la fraîcheur et la qualité de la viande.</p>
                <p>Avant d'être commercialisés, les produits de volaille subissent des contrôles de qualité rigoureux pour garantir leur sécurité et leur conformité aux normes alimentaires. Ces contrôles comprennent des tests microbiologiques, des vérifications de la traçabilité et des examens visuels pour s'assurer de l'absence de défauts ou de contaminations.</p>
                <p>Ils peuvent être aussi tout simplement commercialisés à la population après  contrôle de qualité effectué par le vétérinaire.</p>
            </div>
            <div>
                <div><span class="text-black fw-bolder">Résumé:</span></div>
                <p class="text-dark">La septième étape de l'élevage du poulet de chair concerne l'abattage et la transformation des oiseaux pour la préparation à la commercialisation et à la consommation. Les poulets sont abattus dans des installations respectueuses du bien-être animal, puis passent par des étapes de plumage, d'éviscération, d'inspection, de refroidissement et de transformation. </p>
            </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
