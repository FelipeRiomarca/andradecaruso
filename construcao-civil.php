<?php 
$NomeDaPagina = "Construção";
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

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
		<style type="text/css">
			.theme-title-one h2 {
			    text-transform: initial;
			    text-align: left;
			    font-size: 27px;
			    color: #000;
			}
			.theme-title-one h2:before {
			    left: 3%;
			}
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
				Theme Main Banner
			============================================== 
			--><!--
			<div class="bannerInterno" style="background-image: url(images/servicos/constr_civil.jpg);">
				<div class="container"></div>
			</div>-->

			<!-- 
			=============================================
				CONTEUDO
			============================================== 
			-->
			<div class="our-case section-spacing" style="padding-bottom: 100px;">
				<div class="container">
					<div class="titulo-servicos">
						<h2>CONSTRUÇÃO CIVIL</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-3 col-sm-3 col-12">
								<div class="sidebar">
								<div class="widget widget-nav-menu">
								<ul class="widget-menu">
									<li class=""><a href="manutencao-predial.php">Manutenção Predial</a></li>
									<li class="active"><a href="construcao-civil.php">Construção Civil</a></li>
									<li class=""><a href="projetos.php">Projetos</a></li>
									<li class=""><a href="laudo-consultoria.php">Laudo/Consultoria</a></li>
								</div>
								</div>							
							</div> <!-- /.col- -->
							<div class="col-lg-9 col-sm-6 col-12">
								<div class="theme-title-one">
									<h2>Construção Civil</h2>
									<p style="text-align: left;">Construímos e reformamos imóveis comerciais e residenciais com mão de obra especializada com acompanhamento técnico, administrativo e financeiro atendendo todas as normas construtivas vigentes.</p>
								</div> <!-- /.theme-title-one -->
								<ul style="padding-top: 40px;list-style: disc;padding-left: 3%;">
									<li class="item">Construção e Reforma (casas, prédios, fachadas, condomínios e apartamentos)</li>
									<li class="item">Execução e Gerenciamento de Obra (acompanhamento técnico, administrativo e financeiro)</li>
									<li class="item">Orçamento e Planejamento de Obra</li>
								</ul>
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
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