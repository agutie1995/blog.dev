@extends ('layouts.master')

@section('content')
	<div class="form-group @if($errors->has('title')) has-error @endif">
		{{ Form::text('title', "@if (!isset(id)) {{{Input::old('title')}}} @else {{{ $post->title }}} @endif", ['class' => 'form-control']) }}
		{{-- <input type="text" name="title" value="{{{Input::old('title')}}}" placeholder="Title" autofocus> --}}
	</div>
	<div class="form-group @if($errors->has('title')) has-error @endif">
		{{ Form::textarea('title', "@if (!isset(id)) {{{Input::old('body')}}} @else {{{ $post->body }}} @endif", ['class' => 'form-control']) }}
		{{-- <textarea type="text" name="body" placeholder="Contents Here">{{{ Input::old('body')}}}</textarea> --}}
	</div>		
		{{ Form::submit('Submit') }}

@stop