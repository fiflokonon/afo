@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <h3 class="fw-bold text-dark text-center" style="">Les etapes de l'elevage du poulet chair</h3>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails') }}" style="text-decoration: none;"><br>Niveau 1 :Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing<br><br></a></div>
                <h6 class="fs-6 text-start" style=""><strong>Instructions :</strong></h6>
                <p class="fs-6 fw-light text- text-dark" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue
                    at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing
                    nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper
                    etiam felis....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails') }}" style="text-decoration: none;"><br>Niveau 2 :Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing<br><br></a></div>
                <h6 class="fs-6 text-start" style=""><strong>Instructions :</strong></h6>
                <p class="fs-6 fw-light text- text-dark" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue
                    at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing
                    nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper
                    etiam felis....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails') }}" style="text-decoration: none;"><br>Niveau 3 :Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing<br><br></a></div>
                <h6 class="fs-6 text-start" style=""><strong>Instructions :</strong></h6>
                <p class="fs-6 fw-light text- text-dark" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue
                    at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing
                    nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper
                    etiam felis....<br>
                </p>
            </div>
            <div>
                <div class="fw-bolder text-start" style=""><a class="fs-5 text-start text-dark" href="{{ route('etapedetails') }}" style="text-decoration: none;"><br>Niveau 4 :Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing<br><br></a></div>
                <h6 class="fs-6 text-start" style=""><strong>Instructions :</strong></h6>
                <p class="fs-6 fw-light text- text-dark" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue
                    at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing
                    nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper
                    etiam felis....<br>
                </p>
            </div>
        </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
