@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Sign Up Page')
@section('description', 'This is the sign up page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book.')

@section('tinymce')

@endsection

@section('content')
		<div class="contentsignup">
			<div id="signup">
				<h1>Edit Your Account Details</h1>
				<form action="#" method="post" id="signupForm">
				{{ csrf_field() }} 
				<div class="form-group">
					<label for="firstName">First Name:</label>
					<input type="text" name="first_name" class="form-control" id="firstName" value="{{ old('first_name') }}">
				</div>
				<div class="form-group">
					<label for="lastName">Last Name:</label>
					<input type="text" name="last_name" class="form-control" id="lastName" value="{{ old('last_name') }}">
				</div>
				<div class="form-group">
					<label for="signupEmail">Email:</label>
					<input type="email" name="email" class="form-control" id="signupEmail" value="{{ old('email') }}">
				</div>
				<div class="form-group">
					<label for="signupPassword">Password:</label>
					<input type="password" name="password" placeholder="Enter your new password" class="form-control" id="signupPassword">
				</div>
				<div class="form-group">
					<label for="reenterSignupPassword">Password:</label>
					<input type="password" name="password_confirmation" placeholder="Reenter your new password" class="form-control" id="reenterSignupPassword">
				</div>
				<input type="submit" name="editaccount" value="Edit Account Details" id="editAccountSubmit" class="btn btn-default btn-lg">
				</form>
			</div>
		</div>
@endsection

@section('scripts')

@endsection