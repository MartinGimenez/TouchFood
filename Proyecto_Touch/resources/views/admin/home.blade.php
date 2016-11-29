@extends('admin.template.main')

@section('content')

<body>
    <div class="row">
        <div class="card">    
            <div class="container white darken-3">
                <div class="content center white darken-3">
                <div class="stroke-custom">touch<b>food</b></div>

                <a href="{{ route('sobre-nosotros-admin') }}" <button type="button" class="white-text waves-effect waves-light btn-large red darken-2 z-depth-3">Acerca de nosotros<i class="material-icons right">assignment_ind</i></button></a>

                <style type="text/css"> 
                    .stroke-custom {
                    color: red;
                    font-family: Calibri;
                    font-size: 80px;
                    }

                <style type="text/css"> 
                    .stroke1 {
                    color: red;
                    font-family: Calibri;
                    font-size: 20px;
                    }   
                </style>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection