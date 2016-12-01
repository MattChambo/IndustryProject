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
				<p>User name | date</p>
				<div class="comment">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<br>
				<p class="commentMessage">Message</p>
				<hr>
			</div>
		</div>
@endsection

@section('scripts')

@endsection

