@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
    Nuevo Registro
     <a href="{{route('personas.index')}}" class="btn btn-default pull-right">Listado</a>
   </h2>
     @include('personas.fragment.error')
  {!! Form::open( [ 'route' => 'personas.store' ] ) !!}
        @include('personas.fragment.form')
    {!!Form::close()!!}
 </div>
  <div class="col-sm-4">
      @include('personas.fragment.aside')
  </div>
@endsection
