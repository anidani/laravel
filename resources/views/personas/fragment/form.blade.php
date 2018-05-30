<div class="form-group">
  {!! Form::label('ci','CI')!!}
  {!!Form::text('ci',null,['class'=> 'form-control'])!!}
</div>


<div class="form-group">
  {!!Form::label('nombres','Nombres')!!}
  {!!Form::text('nombres',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
  {!! Form::label('apellidos','Apellidos')!!}
  {!!Form::text('apellidos',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
  {!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>
