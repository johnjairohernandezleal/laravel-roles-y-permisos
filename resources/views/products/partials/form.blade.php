<div  class="form-group">
  {{Form::label('name','nombre del producto')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div  class="form-group">
  {{Form::label('description','descripcion del producto')}}
  {{Form::text('description',null,['class'=>'form-control'])}}
</div>
<div  class="form-group">
  {{Form::submit('Guardar',['class'=>'btn-btn-sm btn.primary'])}}
</div>
