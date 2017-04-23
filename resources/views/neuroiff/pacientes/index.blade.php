@extends('layouts.neuroiff')

@section('content')


        <div class="container1">
                <div class="row listagem">
                        <h3>Relação de pacientes</h3>

                    <!-- INÍCIO da barra de navegação  do CRUD de pacientes-->

                    <nav class="navbar nav-crud-pacientes">
                        <div class="col-md-2">
                        <a href="{{ route('neuroiff.pacientes.create') }}" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                        </div>

                        <div class="col-md-2">
                            <a href="{{ route('neuroiff.pacientes.index') }}" class="btn btn-primary"><i class="fa fa-reply" aria-hidden="true"></i></a>

                        </div>

                        <div class="col-md-4 paginacao">

                            {{ $pacientes->links() }}

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

                </div>



                <div class="row">
                        <table class="table table-striped">
                                <thead>
                                <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Prontuario</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>


                    <tbody>
                    @foreach($pacientes as $paciente)
                            <tr>
                                    <td>{{$paciente->id}}</td>
                                    <td>{{$paciente->name}}</td>
                                    <td>{{$paciente->prontuario}}</td>
                                    <td>
                                        <ul class="list-inline">

                                            <li >

                                                    <a href="{{ route('neuroiff.pacientes.edit', ['paciente' =>$paciente->id]) }}" >
                                                        <span class="glyphicon glyphicon-edit" aria-hidden="true">
                                                            Editar
                                                </span>
                                                    </a>
                                            </li>
                                            |
                                            <li >
                                                <?php $deleteForm = "delete-form-{$loop->index}"; ?>
                                                <a href="{{ route('pacientes.destroy', ['paciente' =>$paciente->id]) }}" onclick="event.preventDefault();
                                                    document.getElementById('{{$deleteForm}}').submit()">
                                                     <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                                           Excluir
                                                </span>
                                                </a>
                                                {!! Form::open(['route' => ['pacientes.destroy','paciente' =>$paciente->id ], 'method' => 'DELETE','id' => $deleteForm, 'style' =>'display:none']) !!}
                                                {!! Form::close() !!}


                                            </li>
                                            |
                                            <li >

                                                <a href="{{ route('neuroiff.pacientes.show', ['paciente' =>$paciente->id]) }}" >
                                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            Detalhes
                                                </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                        @endforeach
                     </tbody>



                        </table>






                </div>


            </div>
        @endsection