@extends('layouts.neuroiff')

@section('content')
<div class="container">
    <section class="pg-form text-center">
        <h1 class="title">Registrar</h1>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="name" type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="password" type="password" class="form-control" placeholder="senha" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" placeholder="confirme a senha" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input type="file" class="form-control" name="image">
                @if ($errors->has('image'))
                    <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('especialidade') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <textarea placeholder="Especialidade" class="form-control" name="especialidade">{{old('especialidade')}}</textarea>
                @if ($errors->has('especialidade'))
                    <span class="help-block">
                        <strong>{{ $errors->first('especialidade') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-form">
                    Registrar
                </button>
            </div>
        </div>
    </form>

        </section>
</div>
@endsection
