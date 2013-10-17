<?php 
//obtenemos la fecha actual definiendo como zona horaria la ciudad de mexico
date_default_timezone_set("America/Mexico_City");
$fecha= date("Y-M-d",time());
$date = explode("-", $fecha);
 ?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
		<title>MEXMOV</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-wide.css" />

		<link rel="stylesheet" href="css/foundation.css">

		<script src="js/vendor/custom.modernizr.js"></script>


	</head>
	
	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div id="content-inner">
					
							<!-- Post -->
								<article class="is-post is-post-excerpt">
									<header>

										
										<h2><a href="#">Bienvenido a MexMov</a></h2>
										<span class="byline">Un sitio donde podras conocer tus niveles de sedentarismo</span>

									

									</header>
									<div class="info">
										
										<span class="date"><span class="month"><?php echo $date[1]; ?></span> <span class="day"><?php echo $date[2];?></span><span class="year">, <?php echo $date[0];?></span></span>
										

		
										
									</div>
									<a href="#" class="image image-full"><img src="images/logomexmov.png" alt="" /></a>
									
								</article>
						
							
							<!-- Pager -->
								<div class="pager">
									<!--<a href="#" class="button previous">Previous Page</a>-->
									<div class="pages">
										<a href="#" class="active">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#">4</a>
										<span>&hellip;</span>
										<a href="#">20</a>
									</div>
									<a href="#" class="button next">Siguiente</a>
								</div>
									<!-- Copyright -->
							<div id="copyright">
								<p>
									&copy; 2013 An Untitled Site.<br />
									Images: <a href="http://n33.co">n33</a>, <a href="http://fotogrph.com">fotogrph</a>, <a href="http://iconify.it">Iconify.it</a>
									Design: <a href="http://html5up.net/">HTML5 UP</a>
								</p>
							</div>


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<a href="#" class="image image-full"><img src="images/logomexmov.png" alt="" /></a>
							</div>
					
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current_page_item"><a href="#">Home</a></li>
									<li><a href="#" data-reveal-id="login">Iniciar Sesion</a></li>
									<li><a href="#">Contacto</a></li>
								</ul>
							</nav>

						<!-- Search -->
							<section class="is-search">
								<form method="post" action="#">
									<input type="text" class="text" name="search" placeholder="Buscar" />
								</form>
							</section>
					
						
					
						<!-- Recent Posts -->
							<section class="is-recent-posts">
								<header>
									<h3>Actividades recientes</h3>
								</header>
								<ul>
									<li><a href="#">Esta semana</a></li>
									<li><a href="#">Eventos</a></li>
								</ul>
							</section>						
					</div>

			</div>

			 <div id="login" class="reveal-modal" style="display: none;" >
		    	<form action="veriflog.php" method = "POST">
				  <fieldset>
				    <legend>Login</legend>
					    <div class="row">
					      <div class="large-12 columns">
					        <label>Usuario</label>
					        <input name="user" type="text" placeholder="Usuario">
					      </div>
					    </div>

					   	<div class="row">
					      <div class="large-12 columns">
					        <label>Password</label>
					        <input type="password" name="pass" placeholder="Password">
					      </div>
					  	</div>

					    <div class="row">
					      <div class="large-4 columns">
					        <input type="submit" value="Iniciar Sesion" class="button next">
					      </div>
					    </div>
				  </fieldset>
				</form>
		    <a class="close-reveal-modal">×</a>
		  	</div>

		  	<div class="reveal-modal-bg" style="opacity: 0; display: none;"></div>


	<script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')


  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>