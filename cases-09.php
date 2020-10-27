<?php 
$NomeDaPagina = "Projetos";
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>Andrade & Caruso Engenharia - Rio de Janeiro</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	    <link rel="stylesheet" href="js/gallery-grid.css">

		

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
		<style>
		body {padding: 0;}
			.AmpliaFoto{line-height: 38px;}
			h5.AmpliaFoto:hover {color: #FFF;}
		</style>	

		

	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			
			<?php include("menu.php");?>

			<!-- /.header-two -->

			<!-- 
			=============================================
				Our Case
			============================================== 
			-->
			<div class="our-case section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2 style="padding-top: 80px;">MANUTENÇÃO PREDIAL</h2>
						<p> Jacarépagua – RJ | Pintura de Fachada</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-12 col-sm-6 col-12" style="padding-top: 80px;">
								<p>Confira abaixo de forma sequencial, a situação atual até o término dos serviços.</p>
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					
					<div class="tz-gallery">

			        <div class="row">
			            <div class="col-sm-6 col-md-4">
			                <a class="lightbox" href="images/cases/07/zoom/01.jpg">
			                    <img src="images/cases/07/01.jpg" alt="">
			                </a>
			            </div>
			            <div class="col-sm-6 col-md-4">
			                <a class="lightbox" href="images/cases/07/zoom/02.jpg">
			                    <img src="images/cases/07/02.jpg" alt="">
			                </a>
			            </div>
			            <div class="col-sm-6 col-md-4">
			                <a class="lightbox" href="images/cases/07/zoom/03.jpg">
			                    <img src="images/cases/07/03.jpg" alt="">
			                </a>
			            </div>
			        </div>

			    </div>

					 <!-- /.wrapper -->
					
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

			



			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<div class="google-map-one" style="display: none;"><div class="map-canvas"></div></div>
			

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			
			<?php include("footer.php");?>

			<!-- /.theme-footer-two -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- LIGHTBOX -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		<script>
		    baguetteBox.run('.tz-gallery');
		</script>
     
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Language Stitcher -->
		<script src="vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
		<script src="vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

		

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		<script src="js/map-script.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>