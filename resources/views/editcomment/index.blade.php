@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Edit Comment Page')
@section('description', 'This is the edit comment page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book. This is the index of the chapters of the book.')

@section('tinymce')
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  	<script>
  		tinymce.init({
		selector: 'textarea',
		height: 200,
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

		<div class="contentindex">
			<h1>Edit Comment</h1>
			{!! Form::model($comment, ['route' => ['EditComment', $comment->id], 'method' => 'POST']) !!}
				{{ Form::textarea('comment', null, ['class' => 'form-control commenttext']) }}
				{{ Form::submit('Edit Comment', ['class' => 'btn btn-success btn-block']) }}
			{!! Form::close() !!}
		</div>

@endsection

@section('scripts')

@endsection