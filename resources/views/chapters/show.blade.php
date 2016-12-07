@extends('master')

@section('title', 'Chapter Page')
@section('description', 'This is a chapter page for Sophisticated Pedagogical Practice. This is a work in progress chapter of education consultant Mary Chamberlains forthcoming book. If you sign up for mebership and are approved by Mary you can make comments on each chapter.')

@section('tinymce')
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 	<script>
  		tinymce.init({
		selector: 'textarea',
		height: 300,
		theme: 'modern',
		plugins: [
		    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks visualchars code fullscreen',
		    'insertdatetime media nonbreaking save table contextmenu directionality',
		    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
		  ],
		 toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		 toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
		 image_advtab: true,
		 templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		 content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
		 });
  	</script>
@endsection

@section('content')

		<div class="contentchapter">
			<h1>{{ $chapter->title }}</h1>
			<div class="form-group" id="editButton">
				@if (Auth::check() && Auth::user()->privilege == 'admin')
					<a href="/chapters/{{ $chapter->id }}/edit" class="btn btn-primary btn-block">Edit Chapter</a>
				@endif
			</div>
			<div class="chaptercontent">
				{!! $chapter->chapter !!}
			</div>
			<hr>
			<div class="commentsection">
				@if (Auth::check() && Auth::user()->privilege != 'unapproved_user')
				{!! Form::open([]) !!}
					{{ Form::textarea('comment', null, ['class' => 'form-control commenttext']) }}
					{{ Form::submit('Post Comment', ['class' => 'btn btn-success btn-block'])}}
				{!! Form::close() !!}
				@endif
			</div>
			<hr>
			<div class="commentsection">
				@foreach ($chapter->comments as $comment)
				<p>{{ $comment->user->first_name }} {{ $comment->user->last_name }} | {{ date('j M, Y h:ia', strtotime($comment->updated_at)) }}</p>
				<div class="comment">
					{!! $comment->comment !!}
				</div>
				<br>
				@if (Auth::check() && $comment->user_id == Auth::user()->id)
					<a href="/EditComment/{{ $comment->id }}" class="btn btn-primary">Edit Comment</a>
					<button class="btn btn-danger deletetoggle">Delete Comment</button>
					<a href="/EditComment/destroy/{{ $comment->id }}" class="btn btn-danger btn-md">Yes</a>
					<button class="hidetoggle btn btn-primary btn-md">No</button>
				@endif
				<hr>
				@endforeach
			</div>
		</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="/js/deletetoggle.js"></script>
@endsection

