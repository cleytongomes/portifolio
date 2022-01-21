<?php
	
	// PEGANDO AS INFORMAÇÕES VINDAS VIA GET
	$nome = $_GET['Nome'];
	$email = $_GET['Email'];
	$assunto = $_GET['Assunto'];
	$mensagem = $_GET['Mensagem'];

	// VALIDANDO A INFORMAÇÃO
	if(!$nome){ echo "<h1>Nome Inválido</h1>"; die();}
	if(!$email){ echo "<h1>Email Inválido</h1>"; die();}
	if(!$assunto){ echo "<h1>Assunto Inválido</h1>"; die();}
	if(!$mensagem){ echo "<h1>Mensagem Inválida</h1>"; die();}

	// ESCREVENDO EM UM ARQUIVO DE TEXTO
	$fp = fopen("mensagens/texto".rand(1,1000).".txt", "w");
	$escreve = fwrite($fp, "Nome : ".$nome."\n");
	$escreve = fwrite($fp, "Email : ".$email."\n");
	$escreve = fwrite($fp, "Assunto : ".$assunto."\n");
	$escreve = fwrite($fp, "Mensagem : ".$mensagem);
	fclose($fp);

	echo "<h1>Mensagem Enviada</h1>";
	sleep(1);
	echo "<script type=\"text/javascript\"> window.close(); </script>"
?>

