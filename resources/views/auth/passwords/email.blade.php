@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Forgoten Password Page')
@section('description', 'This is the forgoten password page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentlogin">
			<div id="login">
				<h1>Reset Your Password</h1>

				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				{!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

				{{ Form::label('email', 'Email Address:') }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}
				{{ Form::submit('Reset Password', ['class' => 'btn btn-primary btn-lg resetpassword']) }}

				{!! Form::close() !!}
			</div>
		</div>

@endsection

@section('scripts')

@endsection