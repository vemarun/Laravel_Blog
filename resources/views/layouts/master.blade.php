<html>
	<head>
	<link href="css/style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
		<title>Can you see the future</title>
		<style>
	@font-face {
    font-family: beyondthemountains;
    src: url(fonts/beyond_the_mountains.otf);
}
			a{
				text-decoration:none !important;
			}
		
	</style>
	</head>
	
	<body>
	<div class="container">
	<div style="color:#A4A4A4;font-weight:600;letter-spacing:2px">
		<x class="d-none d-md-inline float-left">Hello, I am Arun Verma</x>
		<span style="float:right" class="col-centered">
		<a href="#"><i class="fab fa-steam-symbol text-muted pr-5" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-linkedin-in text-muted pr-5" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-facebook-f text-muted pr-5" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-discord text-muted pr-5" aria-hidden="true"></i></a>
		</span>

	</div>
	<h1 class="text-center pt-4" style="font-family:beyondthemountains;">Arun Verma</h1>
	<p class="text-center" style="color:#A4A4A4;letter-spacing:2px">Personal Blog</p>
	<div style="text-align:center;" class="pt-4">
		<a href="/"><p class="d-sm-inline pr-5 text-dark font-weight-bold">HOME</p></a>
		<a href="#"><p class="d-sm-inline pr-5 text-dark font-weight-bold">PORTFOLIO</p></a>
		<a href="#"><p class="d-sm-inline pr-5 text-dark font-weight-bold">ABOUT ME</p></a>
		<a href="#"><p class="d-sm-inline pr-5 text-dark font-weight-bold">CONTACT</p></a>
		</div>
	<hr>
		
@yield('content')
		</div>
	</body>
</html>