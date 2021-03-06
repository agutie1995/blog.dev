@extends('layouts.master')

@section('content')
	<h2>Login</h2>

	{{ Form::open(array('action' => array('HomeController@doLogin'))) }}
		<div class="form-group @if($errors->has('email')) has-error @endif">
		    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
		</div>

		<div class="form-group @if($errors->has('password')) has-error @endif">
		    {{ Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) }}
		</div>

		<button class="btn btn-primary">Login</button>

	{{ Form::close() }}

@stop