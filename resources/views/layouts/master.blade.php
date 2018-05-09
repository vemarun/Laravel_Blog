<html>
	<head>
	<link href="css/style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
	@yield('require')
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
	@if(Auth::check())
		<span class="d-md-inline float-left">Welcome, <a href="/logout">{{Auth::user()->name}}</a></span>
	@else
	   <span class="d-md-inline float-left">Welcome, Guest <a href="/login">Login</a></span>
	@endif
	
		<span style="float:right" class="d-none d-sm-block col-centered pt-1">
		<a href="#"><i class="fab fa-steam-symbol fa-fw pr-5" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-linkedin-in fa-fw pr-5" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-github fa-fw pr-5" aria-hidden="true"></i></a>
		<a href="#"><i class="fab fa-discord fa-fw pr-5" aria-hidden="true"></i></a>
		</span>

	</div>
	<h1 class="text-center pt-5" style="font-family:beyondthemountains;">Arun Verma</h1>
	<p class="text-center" style="color:#A4A4A4;letter-spacing:2px">Personal Blog</p>
	<div style="text-align:center;letter-spacing:2px" class="pt-4">
		<a href="/"><p class="d-sm-inline pr-5 text-dark font-weight-normal">HOME</p></a>
		<a href="#"><p class="d-sm-inline pr-5 text-dark font-weight-normal">PORTFOLIO</p></a>
		<a href="#"><p class="d-sm-inline pr-5 text-dark font-weight-normal">ABOUT ME</p></a>
		<a href="#"><p class="d-sm-inline pr-5 text-dark font-weight-normal">CONTACT</p></a>
		</div>
	<hr>
		
@yield('content')
		</div>
@yield('script')
	</body>
</html>