@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Index Page')
@section('description', 'This is the index page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book. This is the index of the chapters of the book. It also contains brief descriptions of the chapters.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentindex">
			<h1>Index Page</h1>
			<ul>
				<div class="form-group">
					<li>
						<a href="/Chapter">Chapter 1</a>
						<form>
							<textarea class="form-control">
								
							</textarea><br>
							<button type="submit" class="btn btn-default">Edit Description</button>
						</form>
					</li>
				</div>
				<div class="form-group">
					<li>
						<a href="/Chapter">Chapter 2</a>
						<form>
							<textarea class="form-control">
								
							</textarea><br>
							<button type="submit" class="btn btn-default">Edit Description</button>
						</form>
					</li>
				</div>
				<div class="form-group">
					<li>
						<a href="/Chapter">Chapter 3</a>
						<form>
							<textarea class="form-control">
								
							</textarea><br>
							<button type="submit" class="btn btn-default">Edit Description</button>
						</form>
					</li>
				</div>
				<div class="form-group">
					<li>
						<a href="/Chapter">Chapter 4</a>
						<form>
							<textarea class="form-control">
								
							</textarea><br>
							<button type="submit" class="btn btn-default">Edit Description</button>
						</form>
					</li>
				</div>
				<div class="form-group">
					<li>
						<a href="/Chapter">Chapter 5</a>
						<form>
							<textarea class="form-control">
								
							</textarea><br>
							<button type="submit" class="btn btn-default">Edit Description</button>
						</form>
					</li>
				</div>
			</ul>
		</div>

@endsection

@section('scripts')

@endsection