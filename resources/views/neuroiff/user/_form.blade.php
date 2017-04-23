
@if(isset($errors) && count($errors) > 0)
    <div class="alert alert-warning">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

{{ csrf_field() }}

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {{Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nome:', 'required', 'autofocus'])}}
        @if ($errors->has('name'))
            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {{Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'E-mail:', 'required'])}}
        @if ($errors->has('email'))
            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {{Form::password('password', ['class'=>'form-control', 'placeholder' => 'Senha:'])}}
        @if ($errors->has('password'))
            <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-12">
        {{Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'Confirme Senha:'])}}
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {{Form::file('image', ['class'=>'form-control'])}}
        @if ($errors->has('image'))
            <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('especialidade') ? ' has-error' : '' }}">
    <div class="col-md-12">
        {{Form::textarea('especialidade', null, ['class'=>'form-control', 'placeholder' => 'Especialidade:'])}}
        @if ($errors->has('especialidade'))
            <span class="help-block">
                <strong>{{ $errors->first('especialidade') }}</strong>
            </span>
        @endif
    </div>
</div>