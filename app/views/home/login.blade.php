@extends('master')
@section('content')
<div class='row'>
	<div class='col-md-4 col-md-offset-4'>
		<div class='form-group'>
			{{Form::open(['url'=>'user/login'])}}
			{{Form::label('email', 'Email')}}
			{{Form::text('email', '', [
        		'placeholder'=>'email',
        		'class'=>'form-control'
    		])}}
    		{{Form::label('password', 'Password')}}
    		{{Form::password('password', '', [
        		'placeholder'=>'password',
        		'class'=>'form-control'
    		])}}
    		<br />
			{{Form::submit('Login', ['class'=>'btn btn-success'])}}
			{{Form::close()}}
		</div>
	</div>
</div>
@stop