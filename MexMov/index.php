<?php 
//obtenemos la fecha actual definiendo como zona horaria la ciudad de mexico
date_default_timezone_set("America/Mexico_City");
$fecha= date("Y-M-d",time());
$date = explode("-", $fecha);
session_start();
if(isset($_SESSION['user']) ){
		$user = $_SESSION['user'];
	}else{
		$user = 'anonimo';		
	}
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

		<!-- INICIO DE LA IMAGENES -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<!-- jmpress plugin -->
		<script type="text/javascript" src="js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
		<noscript>
			<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
			</style>
		</noscript>

		<!--fin de codigo en head de las imagenes-->


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

										
										<h2>Bienvenido a MexMov</h2>
										<span class="byline">Un sitio donde podras conocer tus niveles de sedentarismo</span>

									

									</header>
									<div class="info">
										
										<span class="date"><span class="month"><?php echo $date[1]; ?></span> <span class="day"><?php echo $date[2];?></span><span class="year">, <?php echo $date[0];?></span></span>
										

		
										
									</div>
									<!-- CODIGO DE IMAGENES -->
									<section id="jms-slideshow" class="jms-slideshow">
				<div class="step" data-color="color-6">
					<div class="jms-content">
						<h3>Eres Sedentario?</h3>
						<p>realiza el test para conocer tu nivel de sedentarismo ...</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/logo.png" width="450px"/>
				</div>
				<div class="step" data-color="color-2" data-y="500" data-scale="0.4" data-rotate-x="30">
					<div class="jms-content">
						<h3>Holy cannoli!</h3>
						<p>But as the riper should by time decease, his tender heir might bear his memory</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/2.png"  />
				</div>
				<div class="step" data-color="color-3" data-x="2000" data-z="3000" data-rotate="170">
					<div class="jms-content">
						<h3>No time to waste</h3>
						<p>Within thine own bud buriest thy content and, tender churl, makest waste in niggarding</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/3.png" />
				</div>
				<div class="step" data-color="color-4" data-x="3000">
					<div class="jms-content">
						<h3>Supercool!</h3>
						<p>Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/4.png" />
				</div>
				<div class="step" data-color="color-5" data-x="4500" data-z="1000" data-rotate-y="45">
					<div class="jms-content">
						<h3>Did you know that...</h3>
						<p>Thou that art now the world's fresh ornament and only herald to the gaudy spring</p>
						<a class="jms-link" href="#">Read more</a>
					</div>
					<img src="images/5.png" />
				</div>
			</section>
			<!--FIN DE CODIGO -->
								</article>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<a href="#" class="image image-full"><img src="images/logomexmov.png" alt="" /></a>
								<h4><?php if($user != 'anonimo')echo $user; ?></h4>
								
							</div>
					
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current_page_item"><a href="#">Home</a></li>
									<li><?php if($user == 'anonimo'){echo '<a href="#" data-reveal-id="login">Iniciar Sesion';}else{echo '<a href="logout.php">Cerrar Sesion';} ?></a></li>
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

			 <div id="login" class="reveal-modal small" style="display: none;" >

			 	<div class="row">
					      <div class="large-12 columns">
					        <center><img src="images/logomexmov.png" alt="" /></center>
					      </div>
					    </div>
		    	<form action="login.php" method = "POST">
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
					      <div class="large-6 columns">
					        <input type="submit" value="Iniciar Sesion" class="button round">
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
  <!-- CODIGO IMAGENES -->
  		<script type="text/javascript">
			$(function() {
				
				var jmpressOpts	= {
					animation		: { transitionDuration : '1.0s' }
				};
				
				$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
					autoplay	: true,
					bgColorSpeed: '0.8s',
					arrows		: true
				}));
				
			});
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