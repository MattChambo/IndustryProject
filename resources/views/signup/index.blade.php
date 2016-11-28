@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Sign Up Page')
@section('description', 'This is the sign up page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book.')

@section('tinymce')

@endsection

@section('content')
		<div class="contentsignup">
			<div id="signup">
				<h1>Sign Up</h1>
				<form action="" method="post" id="signupForm">
				{{ csrf_field() }} 
				<div class="form-group">
					<label for="firstName">First Name:</label>
					<input type="text" name="first_name" placeholder="Please use your real name" class="form-control" id="firstName" value="{{ old('first_name') }}">
					<p id="firstNameMessage"></p>
				</div>
				<div class="form-group">
					<label for="lastName">Last Name:</label>
					<input type="text" name="last_name" placeholder="Please use your real name" class="form-control" id="lastName" value="{{ old('last_name') }}">
					<p id="lastNameMessage"></p>
				</div>
				<div class="form-group">
					<label for="signupEmail">Email:</label>
					<input type="email" name="email" placeholder="Enter your email address" class="form-control" id="signupEmail" value="{{ old('email') }}">
					<p id="emailMessage"></p>
				</div>
				<div class="form-group">
					<label for="signupPassword">Password:</label>
					<input type="password" name="password" placeholder="Enter your password" class="form-control" id="signupPassword">
					<p id="passwordMessage"></p>
				</div>
				<div class="form-group">
					<label for="reenterSignupPassword">Password:</label>
					<input type="password" name="password_confirmation" placeholder="Reenter your password" class="form-control" id="reenterSignupPassword">
					<p id="reenterPasswordMessage"></p>
				</div>
				<input type="submit" name="Signup" value="Sign Up Now!" id="signupSubmit" class="btn btn-default btn-lg">
				</form>
			</div>
		</div>
@endsection

@section('scripts')

@endsection