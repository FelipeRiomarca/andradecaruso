<?php 
$NomeDaPagina = "Manutenção";
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
         <link rel="stylesheet" href="js/gallery-grid.css">

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
            .item::before {padding: 5px 16px;} 
            body {padding: 0;}
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
			<div class="bannerInterno" style="background-image: url(images/servicos/manut_predial.jpg);">
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
						<h2>Instalações Prediais</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-3 col-sm-3 col-12">
								<div class="sidebar">
								<div class="widget widget-nav-menu">
								<ul class="widget-menu">
									<li class=" active"><a href="manutencao-predial.php">Manutenção Predial</a></li>
									<li class=""><a href="construcao-civil.php">Construção Civil</a></li>
									<li class=""><a href="projetos.php">Projetos</a></li>
									<li class=""><a href="laudo-consultoria.php">Laudo/Consultoria</a></li>
								</div>
								</div>							
							</div> <!-- /.col- -->
							<div class="col-lg-9 col-sm-6 col-12">
								<div class="theme-title-one">
									<h2>Instalações Prediais</h2>
									<p style="text-align: left;">Após análise rigorosa para identificar a causa da patologia, adotamos o tipo de tratamento mais adequado para o problema em questão. Executamos este serviço em estruturas tais como:</p>
								</div> <!-- /.theme-title-one -->
                                
                                <div class="row">

                                    <div class="col-lg-12 col-sm-6 col-12">
                                        
                                        <ul style="padding-top: 40px;list-style: disc;padding-left: 3%;">
                                            <li class="item">Instalações Elétrica – Execução de infraestrutura em tubos rígidos e corrugados, enfiação de circuitos, montagem de quadro de luz (QDL), instalações interruptores e tomadas, iluminação de garagem, instalação de luminárias, aumento de carga PC padrão Light;</li>
                                            <li class="item">Instalações Hidráulicas – Montagem e reforma de barrilete, tubulações água quente ou fria, prumadas e distribuição;</li>
                                            <li class="item">Instalações Hidrossanitárias e Águas Pluviais – Montagem e reforma de prumadas, distribuições, tubulações enterradas ou aparentes e caixas em concreto;</li>
                                            <li class="item">Instalações Incêndio – Montagem e reforma de tubulações de incêndio e todo o sistema;</li>
                                            <li class="item">Instalações Gás – Montagem e reforma de tubulações de gás;</li>
                                        </ul>
                                        
                                    </div>
                                  
                                    
                                    
                                </div>
                                <div class="tz-gallery">
                                <div class="row">
                                    
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="images/cases/01/4.jpg">
                                            <img src="images/cases/01/4.jpg" alt="">
                                        </a>
                                    </div>
                                     <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="images/cases/01/5.jpg">
                                            <img src="images/cases/01/5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="images/cases/01/6.jpg">
                                            <img src="images/cases/01/6.jpg" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                    </div>
                                <!--
								<ul style="padding-top: 40px;list-style: disc;padding-left: 3%;">
									<li class="item">Restauração Estrutural (vigas, pilares e lajes de concreto ou metálico)</li>
									<li class="item">Revestimento interno (argamassa, pintura, gesso, contrapiso, revestimento cerâmico)</li>
									<li class="item">Impermeabilização (área descoberta, calha, cisterna, caixa d’água e piscina)</li>
									<li class="item">Instalações Prediais (elétrica, especiais, esgoto, hidráulica, gás e incêndio)</li>
									<li class="item">Reforma de Fachada (pintura, textura, revestimento cerâmico ou argamassa)</li>
									<li class="item">Esquadria de Alumínio (janela, porta, telhado, portão, gradil, guarda corpo e pele de vidro e brise)</li>
									<li class="item">Esquadria de Ferro (janela, porta, telhado, grade, guarda corpo)</li>
									<li class="item">Mármores e Granitos (soleira, tento, bancadas, chapim, peitoril, escada e revestimento em geral)</li>
									<li class="item">Pavimentação (intertravado, concregrama, piso polido e contrapisos diversos)</li>
								</ul>-->
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
        <!-- LIGHTBOX -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
		<script>
		    baguetteBox.run('.tz-gallery');
		</script>
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