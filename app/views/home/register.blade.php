@extends('master')
@section('content')
<div class='row'>
	<div class='col-md-4 col-md-offset-4'>
		<div class='form-group'>
			{{Form::open(['url'=>'user/register'])}}
			<b>{{Form::label('name', 'Nombre')}}</b>
			{{Form::text('name', '', [
        		'placeholder'=>'nombre',
        		'class'=>'form-control'
  			])}}
			<b>{{Form::label('email', 'Email')}}</b>
			{{Form::text('email', '', [
        		'placeholder'=>'email',
        		'class'=>'form-control'
  			])}}
    		<b>{{Form::label('password', 'Password')}}</b>
    		{{Form::password('password', [
        		'placeholder'=>'password',
        		'class'=>'form-control'
    		])}}
    		<b>{{Form::label('passwordAgain', 'Confirme password')}}</b>
    		{{Form::password('passwordAgain', [
        		'placeholder'=>'confirme password',
        		'class'=>'form-control'
    		])}}
  		<br />
			{{Form::submit('Crear cuenta', ['class'=>'btn btn-success'])}}
			{{Form::close()}}
		</div>
	</div>
</div>
@stop