@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      {{$persona->nombres}} {{$persona->apellidos }}
   <a href="{{route('personas.edit',$persona->id)}}" class="btn btn-default pull-right">Editar</a>
   </h2>
   <p>
     CI: {{$persona->ci}}<br />
 </div>
  <div class="col-sm-4">
   @include('personas.fragment.aside')
   </div>
@endsection
