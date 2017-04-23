

{!! Html::openFormGroup('prontuario', $errors) !!}
    {!! Form::label('prontuario', 'Prontuário') !!}
    {!! Form::number('prontuario', null, ['class' => 'form-control', 'placeholder' => 'Ex: 12345']) !!}
{!! Form::error('prontuario', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('name', $errors) !!}
    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Digite o nome do paciente']) !!}
    {!! Form::error('name', $errors) !!}
{!! Html::closeFormGroup() !!}

<hr>
