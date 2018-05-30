@extends('layout')
@section('content')
  <div class="col-sm-8">
    <h2>
     Lista de Personas
     <a href="{{route('personas.create')}}" class="btn btn-primary pull-right">Nuevo</a>
   </h2>
   @include('personas.fragment.info')
   <table class="table table-hover table-striped">
     <thead>
       <tr>
         <th width="20px">ID </th>
           <th>CI  </th>
           <th>Nombres  </th>
          <th>Apellidos </th>
       </tr>
     </thead>
     <tbody>
       @foreach($personas as $persona)
       <tr>
         <td>{{$persona->id}}</td>
         <td>
            {{$persona->ci}}
         </td>
         <td>
            {{$persona->nombres}}
         </td>
         <td>
           {{$persona->apellidos}}
         </td>
         <td>
           <a href="{{route('personas.show',$persona->id)}}" class="btn btn-link">ver</a>
         </td>
         <td>
          <a href="{{route('personas.edit',$persona->id)}}" class="btn btn-link">editar</a>
         </td>
         <td>
           <form action="{{route('personas.destroy',$persona->id)}}" method="post">
           {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE" />
            <button class="btn btn-link">eliminar</button>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div>
  <div class="col-sm-4">
     @include('personas.fragment.aside')
   </div>
@endsection
