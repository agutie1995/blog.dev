@extends('layouts.master')

@section('content')
This is the sign up page
{{-- 	<h2>Sign Up!</h2>

	{{ Form::open(array('action' => array('PostsController@index'))) }}
		<div class="form-group @if($errors->has('email')) has-error @endif">
		    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
		</div>

		<div class="form-group @if($errors->has('password')) has-error @endif">
		    {{ Form::textarea('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) }}
		</div>

		<button class="btn btn-primary">Login</button>

	{{ Form::close() }} --}}

@stop