
{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}

<div class="form-group">
	{!!Form::label('Nombre')!!}
	{!!Form::text('name',null,['class'=>'form control'])!!}
</div>
<br>
<div class="form-group">
	{!!Form::label('Correo')!!}
	{!!Form::text('email',null,['class'=>'form control'])!!}
</div>
<br>
<div class="form-group">
	{!!Form::label('Password')!!}
	{!!Form::password('password',null,['class'=>'form control'])!!}
</div>
<br>
{!!Form::submit('Registrar',['class'=>'btn'])!!}

{!!Form::close()!!}



</form>
