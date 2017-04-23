@extends('layouts.neuroiff')

@section('content')
    <div class="container">
        <div class="row">

            <h3>Detalhes</h3>

            <!-- INÍCIO da barra de navegação  do CRUD de pacientes-->

            <nav class="navbar nav-crud-pacientes">
                <div class="col-md-4">
                    <a href="{{ route('neuroiff.pacientes.edit', ['paciente' =>$paciente->id]) }}" class="btn btn-primary" >
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>


                </div>

                <div class="col-md-4">
                    <a href="{{ route('neuroiff.pacientes.index') }}" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i></a>

                </div>


                <div class="flipkart-navbar-search smallsearch col-md-4">
                    <div class="row">
                        <input class="flipkart-navbar-input col-md-10" type="" placeholder="Buscar pacientes por nome, prontuário..." name="">
                        <button class="flipkart-navbar-button col-md-2">
                            <svg width="15px" height="15px">
                                <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                            </svg>
                        </button>
                    </div>

                </div>


            </nav>
            <!-- FIM da barra de navegação  do CRUD de pacientes-->

            <h2>Dados do Paciente:  {{$paciente->name}}</h2>


            Prontuário: {{$paciente->prontuario}}

        </div>
    </div>


@endsection