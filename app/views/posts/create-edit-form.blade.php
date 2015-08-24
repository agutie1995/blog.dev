@extends ('layouts.master')

@section('content')
	<div class="form-group @if($errors->has('title')) has-error @endif">
		{{ Form::text('title', null,  array('placeholder'=>'Title'), ['class' => 'form-control']) }}
	</div>
	<div class="form-group @if($errors->has('title')) has-error @endif">
		{{ Form::textarea('title', null,  array('placeholder'=>'Contents Here'), ['class' => 'form-control']) }}
	</div>		
		<button>Save</button>

@stop