@extends('template')

@section('titulo')
     LISTADO DE DEPARTAMENTOS
@endsection

@section ('contenido')

    <table class ="table">
       <thead>
           <tr>
               <th>CODIGO</th>
               <th>NOMBRE DE DEPARTAMENTO</th>
               <th>OPCIONES</th>
           </tr>
       </thead>
        <tbody>
             @foreach($departamentos as $departamento)
                 <tr>
                     <td>{!! $departamento -> id !!}</td>
                     <td>{!! $departamento -> name !!}</td>
                     <td><button type ="button" class ="btn btn-warning"><a href="">Editar</a></button></td>
                 </tr>
             @endforeach
        </tbody>

    </table>

 @endsection

