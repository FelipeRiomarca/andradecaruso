<meta charset="UTF-8"> 
<?php

$name = $_POST['name'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$servico = $_POST['servico'];
//$indicacao = $_POST['indicacao'];
$message = $_POST['message'];

$para = "comercial@acengenharia.net";
//$para = "comercial@acengenharia.net";
$assunto = "QUEM SOMOS - Andrade e Caruso";
$mens = "Nome: $name <br /> Serviço: $servico <br /> Email: $email <br /> Telefone: $telefone <br /> Mensagem: $message";
$headers  = 'MIME-Version: 1.1' . PHP_EOL;
$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
$headers .= "From: $name <$email>" . PHP_EOL;
$headers .= "Return-Path: $emailTo" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
		
mail($para, $assunto, $mens, $headers);
if(mail){
?>
<center>
<br/><br/><br/><br/><br/>
<h2 style="color:#555; font-family:Verdana;">Enviado com sucesso!</h2><br/>
<span style="color:#555; font-family:Verdana;">Obrigado por entrar em contato conosco. Aguarde alguns segundos iremos direcioná-lo.</span><br/><br/><br/>
<img src="images/logo/logo.png" style="width: 14%;">
</center>
<?php } else { ?>
<center>
<br/><br/><br/><br/><br/>
<h2 style="color:#555; font-family:Verdana;">Ocorreu um erro!</h2><br/>
<span style="color:#555; font-family:Verdana;">Preencha o formulário corretamente e tente novamente.</span><br/><br/><br/>
<img src="images/logo/logo.png" style="width: 14%;">
</center>
<?php } ?>
<META http-equiv="refresh" content="5;URL=index.php">