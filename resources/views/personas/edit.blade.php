@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      Editar registro
     <a href="{{route('personas.index')}}" class="btn btn-default pull-right">Listado</a>
   </h2>
    @include('personas.fragment.error')

    {!!Form::model($persona,['route'=>['personas.update',$persona->id],'method'=> 'PUT'])!!}
         @include('personas.fragment.form')
     {!!Form::close()!!}
    </div>
  <div class="col-sm-4">
      @include('personas.fragment.aside')
  </div>
@endsection
