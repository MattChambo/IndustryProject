<nav>
	<div>
		<div id="logocontainer">
			<a href="/"><img src="/images/logo.png" alt="Log for Sophisticated Pedagogical Practice" class="logo"></a>
		</div>
		<button class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></button>
		<ul class="login">
			@if (Auth::guest())
			<li><a href="/Login">Login</a> | </li><li><a href="/Signup">Sign Up</a></li>
			@elseif (Auth::user()->privilege == 'admin')
			<li><a href="/Approval">Approve User</a> | <li><a href="/chapters/create">New Chapter</a> |</li>
			<li><a href="/EditAccount">Edit Account</a> | </li><li><a href="/logout">Log Out</a></li>
			@else
			<li><a href="/EditAccount">Edit Account</a> | </li><li><a href="/logout">Log Out</a></li>
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
