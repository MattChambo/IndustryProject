@extends('master')

@section('title', 'Chapter Page')
@section('description', 'This is a chapter page for Sophisticated Pedagogical Practice. This is a work in progress chapter of education consultant Mary Chamberlains forthcoming book. If you sign up for mebership and are approved by Mary you can make comments on each chapter.')

@section('tinymce')
@endsection

@section('content')

		<div class="contentchapter">
			<h1>{{ $chapter->title }}</h1>
			<div class="form-group" id="editButton">
				<a href="/chapters/{{ $chapter->id }}/edit" class="btn btn-primary btn-block">Edit Chapter</a>
			</div>
			<div class="chaptercontent">
				{{ $chapter->chapter }}}
			</div>
			<hr>
			<div class="commentsection">
				{!! Form::open([]) !!}
					{{ Form::textarea('comment', null, ['class' => 'form-control commenttext']) }}
					{{ Form::submit('Post Comment', ['class' => 'btn btn-success btn-block'])}}
				{!! Form::close() !!}
			</div>
			<hr>
			<div class="commentsection">
				@foreach ($chapter->comments as $comment)
				<p>{{ $comment->user->first_name }} {{ $comment->user->last_name }} | {{ date('j M, Y h:ia', strtotime($comment->updated_at)) }}</p>
				<div class="comment">
					{{ $comment->comment }}
				</div>
				<br>
				<a href="/EditComment/{{ $comment->id }}" class="btn btn-primary">Edit Comment</a>
				<a href="/EditComment/destroy/{{ $comment->id }}" class="btn btn-danger">Delete Comment</a>
				<hr>
				@endforeach
			</div>
		</div>
@endsection

@section('scripts')

@endsection

