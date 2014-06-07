@extends('master')
@section('content')
<div class='row'>
	<div class='col-md-4 col-md-offset-4'>
		<div class='form-group'>
			{{Form::open(['url'=>'user/login'])}}
			<b>{{Form::label('email', 'Email:')}}</b>
			{{Form::text('email', '', [
        		'placeholder'=>'email',
        		'class'=>'form-control'
  		])}}
    	<b>{{Form::label('password', 'Password:')}}</b>
    		{{Form::password('password', [
        		'placeholder'=>'Your Password',
        		'class'=>'form-control'
    		])}}
  		<br />
			{{Form::submit('Login', ['class'=>'btn btn-success'])}}
			{{Form::close()}}
		</div>
	</div>
</div>
@stop
