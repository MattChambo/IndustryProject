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
			{!! Form::open(['route' => 'chapters.store']) !!}
				{{ Form::label('title', 'Chapter Title:') }}
				{{ Form::text('title', old('title'), array('class' => 'form-control')) }}
				<p id="titleMessage"></p>
				{{ Form::label('description', 'Chapter Description:') }}
				{{ Form::text('description', old('description'), array('class' => 'form-control'))}}
				<p id="descriptionMessage"></p>
				{{ Form::textarea('chapter', old('chapter'), array('class' => 'form-control')) }}
				<p id="chapterMessage"></p>
				{{ Form::submit('Save Chapter', array('class' => 'btn btn-success btn-block')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')

@endsection