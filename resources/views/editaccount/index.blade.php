@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Sign Up Page')
@section('description', 'This is the sign up page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book.')

@section('tinymce')

@endsection

@section('content')
		<div class="contentsignup">
			<div id="signup">
				<h1>Edit Your Account Details</h1>
					
						{!! Form::model($user, ['route' => ['EditAccount'], 'method' => 'PUT']) !!}
							<div class="form-group">
								{{ Form::label('first_name', 'First Name:') }}
								{{ Form::text('first_name', old('first_name'), array('class' => 'form-control', '')) }}
							</div>
							<div class="form-group">
								{{ Form::label('last_name', 'Last Name:') }}
								{{ Form::text('last_name', old('last_name'), array('class' => 'form-control')) }}
							</div>
							<div class="form-group">
								{{ Form::label('email', 'Email:') }}
								{{ Form::email('email', old('chapter'), array('class' => 'form-control')) }}
							</div>
							<div class="form-group"> 	
								{{ Form::label('password', 'Password:') }}
								{{ Form::password('password', array('class' => 'form-control')) }}
							</div>
							<div class="form-group">
								{{ Form::label('password_confirmation', 'Reenter Password:') }}
								{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
							</div>
							<div class="form-group">
								{{ Form::submit('Edit Account Details', array('class' => 'btn btn-default btn-lg')) }}
							</div>
						{!! Form::close() !!}

						<button class="btn btn-danger btn-lg deletetoggle">Delete Your Account</button>
						<a class="btn btn-danger btn-md" href="/EditAccount/destroy">Yes</a>
						<button class="hidetoggle btn btn-primary btn-md">No</button>
			</div>
		</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="/js/deletetoggle.js"></script>
@endsection