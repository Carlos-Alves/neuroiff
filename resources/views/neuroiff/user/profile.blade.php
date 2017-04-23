@extends('layouts.neuroiff')

@section('content')
    <div class="container">
        <section class="pg-form text-center">
            <h1 class="title">Meu Perfil</h1>
            {{Form::model(auth()->user(), ['route'=>'profile.update', 'class'=>'form-horizontal', 'files' => true])}}

            @include('neuroiff.user._form')


            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-form">
                        Atualizar Perfil
                    </button>
                </div>
            </div>

            {{Form::close()}}

        </section>
    </div>
@endsection
