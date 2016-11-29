@extends('master')

@section('title', 'Sophisticated Pedagogical Practice | Approval Page')
@section('description', 'This is the user approval page for Sophisticated Pedagogical Practice. A website for the development of education consultant Mary Chamberlains book. This is the page where Mary approves or dissaproves people who have signed up to make comments.')

@section('tinymce')

@endsection

@section('content')

		<div class="contentapproval">
			<div id="approval">
				<h1>Approve Users</h1>
				@foreach ($users as $User)
					<div id="user">
						<div id="usercontent">
							<span>{{ $User->first_name }}</span>
							<span>{{ $User->last_name }}</span><br>
							<a class="btn btn-success" href="#">Approve User</a>
							<a class="btn btn-danger" href="Approval/destroy/{{$User->id}}">Delete User</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		
@endsection

@section('scripts')

@endsection