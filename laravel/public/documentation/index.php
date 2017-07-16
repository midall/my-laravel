<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Michael Nt">
		<meta name="keywords" content="">

		<title>MyLaravel | Documentation by Michael Nt</title>

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/stroke.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shCore.css" media="all">
		<link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shThemeRDark.css" media="all">

		<!-- CUSTOM -->
		<link rel="stylesheet" type="text/css" href="css/custom.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<div id="wrapper">

			<div class="container">

				<section id="top" class="section docs-heading">

					<div class="row">
						<div class="col-md-12">
							<div class="big-title text-center">
								<h1>My Laravel</h1>
								<p class="lead">Documentation for the version 0.1beta</p>
							</div>
							<!-- end title -->
						</div>
						<!-- end 12 -->
					</div>
					<!-- end row -->

					<hr>

				</section>
				<!-- end section -->

				<div class="row">

					<div class="col-md-3">
						<nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
							<ul class="nav">
								<li><a href="#line1">About the project</a></li>
								<li><a href="#line2">How to Install</a></li>
								<li><a href="#line3">My Laravel</a>
									<ul class="nav">
										<li><a href="#line3_1">CSS/JS</a></li>
										<li><a href="#line3_2">Dependencies</a></li>
										<li><a href="#line3_3">Artisan</a></li>
									</ul>
								</li>
								<li><a href="#line4">References</a></li>
								<li><a href="#line5">Version History (Changelog)</a></li>
								<li><a href="#line6">Contact Me</a></li>
							</ul>
						</nav >
					</div>
					<div class="col-md-9">
						<section id="line1" class="welcome">

							<div class="row">
								<div class="col-md-12 left-align">
									<h2 class="dark-text">About the project<hr></h2>
									<div class="row">

										<div class="col-md-12 full">
											<div class="intro1">
												<ul>
													<li><strong>Item Name : </strong>My Laravel</li>
													<li><strong>Item Version : </strong> v 0.1</li>
													<li><strong>Author  : </strong> <a href="https://ntallas.eu/" target="_blank">Michael Nt</a></li>
													<li><strong>GitHub repository: </strong> <a href="https://github.com/midall/my-laravel" target="_blank">My Laravel project</a></li>
												</ul>
											</div>

											<hr>
											<div>
												<p>First of all, thank you so much for downloading this repository.
													<strong>You are awesome!</strong>
													<br> You are entitled to get all free lifetime upcoming versions to this product.
												</p>
												
												<p>This documentation is to help you regarding each step of customization. 
													Please go through the documentation carefully to understand how this
													application is made and how to edit this properly.
													Knowledge of PHP, MySQL, JS, HTML and CSS  is required to customize this application. </p>
												
												<h4>Test Environment</h4>
												<p>The application has been tested in: (NOT prerequisites)</p>
												<ol>
													<li>Apache 2.4.23</li>
													<li>PHP 7.0.10</li>
													<li>MySQL 5.7.14</li>
													<li>Laravel 5.4.24</li>
												</ol>
												<div class="intro2 clearfix">
													<p>
														<i class="fa fa-exclamation-triangle"></i>
														Be careful while editing the software. If not edited properly, the functionality may break completely.
														<br> No support is provided for faulty customization.
													</p>
												</div>
												
												<h4>Enhancements</h4>
												<p></p>
											</div>
										</div>

									</div>
									<!-- end row -->
								</div>
							</div>
						</section>

						<section id="line2" class="section">

							<div class="row">
								<div class="col-md-12 left-align">
									<h2 class="dark-text">How to Install<a href="#top">#back to top</a><hr></h2>
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->
							
							<div class="row">
								<div class="col-md-12">
									<ol>
										<li>Download the package</li>
										<li>Via composer run the following command: composer create-project laravel/laravel –-prefer-dist</li>
										<li>The above command will create a folder "laravel" in your root directory</li>
										<li>Homepage (default index) is "/laravel/public/index.php". Access it either:</li>
										<li>
											<ol>
												<li>Rename "/laravel/server.php" to "/laravel/index.php" and access the aplication in "mydomain/project/laravel"</li>
												<li>Or create an alias to load the directory "/laravel/public" (example file "mylaravel.conf" including in "extrafiles" folder)</li>
												<li>Or create a virtual host by adding on "apache\conf\extra\httpd-vhosts.conf" by following these steps: <br />
													&lt;VirtualHost *:80&gt; DocumentRoot c:/wamp64/www/mylaravel/laravel/public ServerName mylaravel.dev &lt;/VirtualHost&gt;
													<br />
													and on "C:\Windows\System32\drivers\etc\hosts"
													<br />
													127.0.0.1       localhost
													<br />
													127.0.0.1       mylaravel.dev
												</li>
											</ol>
										</li>
										<li>mylaravel.dev</li>
									</ol>
								</div>

							</div>

						</section>
						<!-- end section -->

						<section id="line3" class="section">

							<div class="row">
								<div class="col-md-12 left-align">
									<h2 class="dark-text">Initial Steps <a href="#top">#back to top</a><hr></h2>
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->

							<div class="row">
								<div class="col-md-12">
									<h4 id="line3_1">CSS/JS</h4>
									<p><strong>Laravel Mix</strong></p>
									<p>CSS and JS files are stored on</p>
									<ol>
										<li>resources/assets/css</li>
										<li>resources/assets/js</li>
									</ol>
									<p>Laravel uses "Laravel Mix", to compile CSS, JS and to minified them into:</p>
									<ol>
										<li>public/css</li>
										<li>public/js</li>
									</ol>
									<br />
									
									<h4 id="line3_2">Dependencies</h4>
									<p><strong>Node.js</strong></p>
									<p>
										Is a Runtime environment that allows to run JS in server and provides NPM 
										(Node Package Manager) to install packages and modules.</p>
									<p>Commands</p>
									<li>
										<ol>npm install -g, install node js inside laravel, -g stands for globally</ol>
										<ol>npm update , updates node package manager</ol>
										<ol>npm run dev, compiles SCSS into public folder</ol>
										<ol>npm run watch, keeps the compiler running for detecting changes</ol>
										<ol>npm install vue, install VUE</ol>
										<ol>npm update vue, update VUE</ol>
										<ol>npm install vuew-template-compiler</ol>
										<ol>npm update vuew-template-compiler</ol>
									</li>
									<br />
									
									<p><strong>VUE</strong></p>
									<p>JS front-end framwork/library</p>
									<br />
									
									<p><strong>SASS</strong></p>
									<p>Style sheet language that Laravel will compile and include CSS into public folder.</p>
									<br />
									
									<p><strong>Laravel Collective</strong></p>
									<p>
										Laravel Collective contains all the extra components of Laravel that have been 
										removed from the core framework. I this project I use it for HTML and forms.
									</p>
									<br />
									
									<h4 id="line3_3">Artisan</h4>
									<p><strong>Controller</strong></p>
									<p>Create controller with the command "php artisan make:controller ControllerName"</p>
									<p>
										Inside the controller there is "namespace", which defines that belongs to controllers. 
										From "use Illuminate\Http\Request" the "Illuminate" defines that is from laravel and 
										"Http\Request" defines that there is a post request</p>
									
								</div>
							</div>

						</section>
						<!-- end section -->
						
						<section id="line4" class="section">

							<div class="row">
								<div class="col-md-12 left-align">
									<h2 class="dark-text"> References<a href="#top">#back to top</a><hr></h2>
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->

							<div class="row">
								<div class="col-md-12">
									<h4>Useful Links and Reference</h4>
									<p>For this project the following link provide me the essential to install and run the project:</p>
									<ol>
										<li><a href="https://www.tutorialspoint.com/laravel/laravel_configuration.htm" target="_blank">Tutorialspoint</a></li>
										<li><a href="https://www.youtube.com/watch?v=jnvu1GpylP0" target="_blank">How To Create Basic Laravel Website</a></li>
										<li><a href="#" target="_blank">Link</a></li>
									</ol>
								</div>
							</div>
							<!-- end row -->

						</section>
						<!-- end section -->
						
						<section id="line5" class="section">

							<div class="row">
								<div class="col-md-12 left-align">
									<h2 class="dark-text">Version History (Changelog) <a href="#top">#back to top</a><hr></h2>
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->

							<div class="row">
								<div class="col-md-12">

									<p>You can find the version history on file <strong>changelog.md</strong> .</p>

									<hr>

									<h4>Changelog</h4>

									<pre class="brush: html">
										<?php
										$handle = fopen( '../../../changelog.md', 'r');
										while( ( $line = fgets( $handle ) ) !== false )
										{
											echo $line;
										}
										fclose($handle);
										?>
									</pre>
								</div>
							</div>
							<!-- end row -->

						</section>
						<!-- end section -->
						
						<section id="line6" class="section">

							<div class="row">
								<div class="col-md-12 left-align">
									<h2 class="dark-text">Contact Me <a href="#top">#back to top</a><hr></h2>
								</div>
								<!-- end col -->
							</div>
							<!-- end row -->

							<div class="row">
								<div class="col-md-12">
									<p> Please feel free to visit <a href="https://ntallas.eu/" target="_blank">ntallas.eu</a> and contact me</a>
									
								</div>
							</div>
							<!-- end row -->

						</section>
						<!-- end section -->
					</div>
					<!-- // end .col -->

				</div>
				<!-- // end .row -->

			</div>
			<!-- // end container -->

		</div>
		<!-- end wrapper -->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>

		<!-- CUSTOM PLUGINS -->
		<script src="js/custom.js"></script>
		<script src="js/main.js"></script>

		<script src="js/syntax-highlighter/scripts/shCore.js"></script>
		<script src="js/syntax-highlighter/scripts/shBrushXml.js"></script>
		<script src="js/syntax-highlighter/scripts/shBrushCss.js"></script>
		<script src="js/syntax-highlighter/scripts/shBrushJScript.js"></script>

	</body>

</html>