@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Edit Comment Page')
@section('description', 'This is the edit comment page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book. This is the index of the chapters of the book.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentindex">
			<h1>Edit Comment</h1>
			{!! Form::model($comment, ['route' => ['EditComment', $comment->id], 'method' => 'POST']) !!}
				{{ Form::textarea('comment', null, ['class' => 'form-control commenttext']) }}
				{{ Form::submit('Edit Comment', ['class' => 'btn btn-success btn-block'])}}
			{!! Form::close() !!}
		</div>

@endsection

@section('scripts')

@endsection