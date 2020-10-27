<?php 
if ($NomeDaPagina == "Home"){
	$baseUrl = "";
} else {
	$baseUrl = "http://andradecaruso.com.br/";
}
?>
<header class="header-two">
				

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-right" style="width: 160px;"><a href="index.php"><img src="images/logo-new.jpg" alt=""></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-right">
					   			<nav id="mega-menu-holder" class="clearfix">
								    <ul class="clearfix">
									    <li class="active"><a href="<?php echo $baseUrl;?>index.php">Home</a>
									    	
									    </li>
									    <li><a href="<?php echo $baseUrl;?>#quem_somos">QUEM SOMOS</a>
									    	
									    </li>
									    <li><a href="servicos.php">SERVIÇOS</a>
									    	<!-- MENU DROPDOWN 
											<ul class="dropdown">
									        	<li><a href="manutencao-predial.php">Manutenção Predial</a></li>
									        	<li><a href="construcao-civil.php">Construção Civil</a></li>
									        	<li><a href="projetos.php">Projetos</a></li>
									        	<li><a href="laudo-consultoria.php">Laudo/Consultoria</a></li>
									       </ul>
											-->
									    </li>

									    <li><a href="<?php echo $baseUrl;?>#projetos-realizados">Portfolio</a></li>
									   
									    <li><a href="<?php echo $baseUrl;?>#contato">Fale Conosco</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
					   		<div class="right-widget float-right">
					   			<ul>
					   				
					   				
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> 