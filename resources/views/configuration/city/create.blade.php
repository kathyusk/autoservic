@extends('template')

@section('titulo')
    Crear nuevo ciudad
@endsection

@section('contenido')
    @if (count($errors)>0)
        @foreach($errors->all() as $error)
            <li>({!!$error!!}   )</li>
        @endforeach
    @endif

    {!! Form::open(['url' => '/ciudades']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre de Ciudad</label>
        {!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Ingresa nombre del departamento']) !!}

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Departameto</label>
        {!! Form::select('County_id',$county, ['class' => 'form-control','placeholder'=>'Ingresa nombre del departamento']) !!}

    </div>

    <div>
        {!! Form::submit('Guardar') !!}
    </div>
    {!! Form::close() !!}

@endsection