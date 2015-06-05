@extends('template')

@section('titulo')
    LISTADO DE CIUDADES
@endsection


@section ('contenido')

    <table class ="table">
        <thead>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE DE CIUDADES</th>
            <th>NOMBRE DE DEPARTAMENTO</th>
            <th>OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ciudades as $ciudad)
            <tr>
                <td>{!! $ciudades -> id !!}</td>
                <td>{!! $ciudades -> name !!}</td>
                <td>{!! $ciudades -> county_id !!}</td>
                <td><button type ="button" class ="btn btn-warning"><a href="">Editar</a></button></td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection