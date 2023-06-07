@extends('layouts.app')

@section('title', $title)

@section('content')
    <body id="page-top">
    <div id="wrapper">
        @include('pages.header')
        <div class="container-fluid">
            <div class="fw-bolder text-start">
                <p class="text-dark"><br><strong>Niveau 1 : Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing</strong><br></p>
            </div>
            <h6 class="fs-6 text-start text-dark"><strong>Instructions :</strong></h6>
            <p class="fs-6 fw-light text-start text-dark"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus <br><br>&nbsp; &nbsp; &nbsp; <strong>&nbsp; &nbsp; -</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit<br><br>&nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp; -</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong> -</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>spotenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus amet, consectetur adipiscing elit. In adipiscing nunc elementum sed augue felis sit nec cum. Lectus mauris netus potenti magnis erat. Risus semper etiam felis ipsum. Purus faucibus tempus augue at rutrum praesent egestas a.Lorem ipsum dolor sit amet, consectetur adipiscing <br><br></p>
        </div>
        </div>
        @include('pages.footer')
    </div>
    </body>
@endsection
