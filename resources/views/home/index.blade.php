@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Home Page')
@section('description', 'This is the home page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains forthcoming book. The website also contains some information about mary. If you sign up for an account and are approved by Mary you can make comments on the chapters to help Mary with the book.')

@section('tinymce')

@endsection

@section('content')

		<div class="contenthome">
			<div id="imageright">
				<a href="/About"><img src="/images/Mary1.jpg" alt="A photo of Mary Chamberlain" class="image"></a>
			</div>
			<div id="imageleft">
				<a href="/AboutBook"><img src="/images/book1.jpg" alt="A photo of a book" class="image"></a><br>
				<a href="/Index"><img src="/images/Business.jpg" alt="A photo of a desk with a computer on it" class="image"></a>
			</div>
		</div>

@endsection

@section('scripts')

@endsection