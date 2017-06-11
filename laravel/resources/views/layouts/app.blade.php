<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Laravel</title>
    </head>
    <body>
        <div class="">
			@yield('content')
			
			@section('sidebar')
			<div class="sidebar">
				<h3>Sidebar</h3>
				This is a sidebar
				@show
			</div>
        </div>
    </body>
</html>