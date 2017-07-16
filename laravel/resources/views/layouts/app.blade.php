<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/app.css" >
        <title>My Laravel</title>
    </head>
    <body>
        <div class="">
			@include('inc.navbar')
			
			<div class="container">
				@if(Request::is('/') || Request::is('home') )
					@include('inc.showcase')
				@endif
				<div class="row">
					<div class="col-md-8 col-lg-8">
						@yield('content')
					</div>
					<div class="col-md-4 col-lg-4">
						@include('inc.sidebar')
					</div>
				</div>
			</div>
			
			<footer id="footer" class="text-center">
				<p>Copyright &copy; <a href="ntallas.eu">Michael</a></p>
				
			</footer>
			
        </div>
    </body>
</html>