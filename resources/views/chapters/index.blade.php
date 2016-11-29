@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Index Page')
@section('description', 'This is the index page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book. This is the index of the chapters of the book. It also contains brief descriptions of the chapters.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentindex">
			<h1>Index Page</h1>
			<ul>
				@foreach ($chapter as $chapters)
					<li>
						<a href="{{ route('chapters.show', $chapters->id) }}">{{ $chapters->title }}</a>
						<div class="description">
							{{ $chapters->description }}
						</div>
					</li>
				@endforeach
			</ul>
		</div>

@endsection

@section('scripts')

@endsection