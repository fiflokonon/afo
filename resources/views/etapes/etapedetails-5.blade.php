@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Étape 5: La gestion sanitaire</strong><br></p>
                <p><b>Durée: Tout au long du cycle d'élevage (45 jours)</b></p>
            </div>
            <div class="fs-6 fw-light text-start text-dark"><br>
                <p>La cinquième étape de l'élevage du poulet de chair met l'accent sur la gestion sanitaire pour assurer la santé et le bien-être des oiseaux. Vous devez mettre en œuvre diverses pratiques et mesures préventives pour maintenir un environnement sain et minimiser les risques de maladies.</p>
                <div>
                    <p>La biosécurité est une priorité dans cette étape. Pour ce fait il faut : </p>
                    <ul>
                        <li>Contrôler strictement l'accès aux bâtiments d'élevage pour empêcher l'entrée de personnes, d'animaux sauvages ou d'autres oiseaux qui pourraient introduire des agents pathogènes,</li>
                        <li>Nettoyer, désinfecter et appliquez également des mesures d'hygiène rigoureuses régulièrement pour éliminer les contaminants potentiels, </li>
                        <li>Surveiller attentivement l'état de santé des poulets  pour détecter tout signe de maladie ou de détresse, tels que des changements comportementaux, des problèmes respiratoires, une réduction de l'appétit ou des anomalies physiques,<br>
                            <p>
                                <span class="fw-bolder text-black">NB:</span> En cas de problème, des mesures correctives sont prises rapidement sous la supervision du Vétérinaire.
                            </p>
                        </li>
                        <li>La vaccination est également une pratique courante dans l'élevage du poulet de chair. Les poulets peuvent être vaccinés contre certaines maladies spécifiques pour renforcer leur immunité et prévenir les infections. Suivez les programmes de vaccination recommandés par le vétérinaire pour assurer une protection adéquate,</li>
                        <li>Veillez à maintenir des conditions d'élevage optimales, notamment en termes de température, d'humidité et de ventilation. Ajustez ces paramètres en fonction des besoins des poulets de chair à différents stades de croissance.</li>
                    </ul>
                </div>
            </div>
            <div>
                <div><span class="text-black fw-bolder">Résumé:</span></div>
                <p class="text-dark">La cinquième étape de l'élevage du poulet de chair se concentre sur la gestion sanitaire pour maintenir la santé et le bien-être des oiseaux. Les éleveurs mettent en place des pratiques de biosécurité, surveillent la santé des poulets, administrent des vaccinations, ajustent l'environnement d'élevage et maintiennent des normes d'hygiène élevées. Ces mesures visent à prévenir les maladies, à minimiser les risques sanitaires et à assurer des conditions optimales pour la croissance et le développement des poulets de chair. </p>
            </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
