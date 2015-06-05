@extends('template')

@section('titulo')
    Crear nuevo departamento
    @endsection

@section('contenido')

    {!! Form::open(['url' => '/departamentos']) !!}
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
            {!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Ingresa nombre del departamento']) !!}

            </div>

            <div>
                {!! Form::submit('Guardar') !!}
            </div>
    {!! Form::close() !!}

@endsection