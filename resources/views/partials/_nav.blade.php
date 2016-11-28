<nav>
	<div>
		<div id="logocontainer">
			<a href="/"><img src="/images/logo.png" class="logo"></a>
		</div>
		<button class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></button>
		<ul class="login">
			@if (Auth::guest())
			<a href="/Login">Login</a> | <a href="/Signup">Sign Up</a>
			@elseif (Auth::user()->privilege == 'admin')
			<a href="/Approval">Approve User</a> | <a href="/chapters/create">New Chapter</a> | <a href="/logout">Log Out</a>
			@else
			<a href="/logout">Log Out</a>
			@endif
		</ul>
	</div>
	<div id="menucontainer">
		<ul class="menu" role="menu">
			<li>
				<a href="/About" class="menulink">About Mary</a>
			</li>
			<li>
				<a href="/AboutBook" class="menulink">About the Book</a>
			</li>
			<li>
				<a href="/chapters" class="menulink">Index</a>
			</li>
		</ul>
	</div>

	<div id="desktopmenucontainer">
		<ul class="desktopmenu" role="menu">
			<li>
				<a href="/About">About Mary</a>
			</li>
			<li>
				<a href="/AboutBook">About the Book</a>
			</li>
			<li>
				<a href="/chapters">Index</a>
			</li>
		</ul>
	</div>
</nav>
