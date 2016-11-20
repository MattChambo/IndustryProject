<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial=scale=1">
		<title>Sophisticated Pedagogical Practice</title>
		<meta name="description" content="Sophisticated Pedagogical Practice">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css.map">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css.map">
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>

		<nav>
			<div>
				<div id="logocontainer">
					<a href="/"><img src="/images/logo.png" class="logo"></a>
				</div>
					<button class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></button>
					<span class="login"><a href="/Login">Login</a> | <a href="/Signup">Sign Up</a></span>
			</div>
			<div id="menucontainer">
				<ul class="menu">
					<li>
						<a href="/About" class="menulink">About Mary</a>
					</li>
					<li>
						<a href="/AboutBook" class="menulink">About the Book</a>
					</li>
					<li>
						<a href="/Index" class="menulink">Index</a>
					</li>
				</ul>
			</div>

			<div id="desktopmenucontainer">
				<ul class="desktopmenu">
					<li>
						<a href="/About">About Mary</a>
					</li>
					<li>
						<a href="/AboutBook">About the Book</a>
					</li>
					<li>
						<a href="/Index">Index</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="contentlogin">
			<div id="login">
				<h1>Login</h1>
				<form action="" method="post" id="loginForm">
				<div class="form-group">
					<label for="loginEmail">Email:</label>
					<input type="email" name="Email" placeholder="Enter your email address" class="form-control" id="loginEmail" value="">
					<p id="emailMessage"></p>
				</div>
				<div class="form-group">
					<label for="loginPassword">Password:</label>
					<input type="password" name="password" placeholder="Enter your password" class="form-control" id="loginPassword">
					<p id="passwordMessage"></p>
				</div>
				<input type="submit" name="login" value="Login Now!" id="loginSubmit" class="btn btn-default btn-lg">
				</form>
			</div>
		</div>
		<footer>
			<span>Developed by Chambo Design</span>
			<div id="socialmedia">
				<a href="https://nz.linkedin.com/in/mary-chamberlain-1530b733"><img src="/images/linkedin.jpg" class="footerimage"></a>
				<a href="https://twitter.com/marberchamb"><img src="/images/twitter-white.png" class="footerimage"></a>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/npm.js"></script>
		<script src="/js/navigation.js"></script>
	</body>
</html>