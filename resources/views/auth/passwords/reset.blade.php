@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Forgoten Password Page')
@section('description', 'This is the forgoten password page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentlogin">
			<div id="login">
				<h1>Reset Your Password</h1>

				{!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}

				{{ Form::hidden('token', $token) }}

				{{ Form::label('email', 'Email Address:') }}
				{{ Form::email('email', $email, ['class' => 'form-control']) }}

				{{ Form::label('password', 'New Password:')}}
				{{ Form::password('password', ['class' => 'form-control']) }}

				{{ Form::label('password_confirmation', 'Confirm New Password')}}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

				{{ Form::submit('Reset Password', ['class' => 'btn btn-primary btn-lg resetpassword']) }}

				{!! Form::close() !!}
			</div>
		</div>

@endsection

@section('scripts')

@endsection