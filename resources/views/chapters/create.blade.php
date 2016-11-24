@extends('master')

@section('title', 'Chapter Page')
@section('description', 'This is a chapter page for Sophisticated Pedagogical Practice. This is a work in progress chapter of education consultant Mary Chamberlains forthcoming book. If you sign up for mebership and are approved by Mary you can make comments on each chapter.')

@section('tinymce')
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 	<script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('content')

		<div class="contentchapter">
			<div class="form-group">
			{!! Form::open([]) !!}
				{{ Form::label('title', 'Chapter Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}
				{{ Form::label('description', 'Chapter Description:') }}
				{{ Form::submit('Save Title and Description', array('class' => 'form-control')) }}
			{!! Form::close() !!}
		</div>
		<div class="form-group">
				{!! Form::open([]) !!}
					{{ Form::textarea('chapter', null, array('class' => 'form-control') }}
					{{ Form::submit('Save Chapter', array('class' => 'btn btn-default btn-lg')) }}
				{!! Form::close() !!}
			</div>
		</div>

@endsection

@section('scripts')

@endsection