@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Login Page')
@section('description', 'This is the login page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentlogin">
			<div id="login">
				<h1>Login</h1>
				<form action="#" method="post" id="loginForm">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="loginEmail">Email:</label>
					<input type="email" name="email" placeholder="Enter your email address" class="form-control" id="loginEmail" value="{{ old('email') }}">
				</div>
				<div class="form-group">
					<label for="loginPassword">Password:</label>
					<input type="password" name="password" placeholder="Enter your password" class="form-control" id="loginPassword">
				</div>
				<input type="submit" name="login" value="Login Now!" id="loginsubmit" class="btn btn-default btn-lg">
				</form>
				<a href="{{ url('password/reset') }}" class="passwordreset">Forgotten your password? Click here!</a>
			</div>
		</div>

@endsection

@section('scripts')

@endsection