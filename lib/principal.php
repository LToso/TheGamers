<?php 
	#Include nas funcoes do anime
	include_once('functions/banco.php');
	$banco = new banco;
    $Conteudo = $banco->CarregaHtml('principal');
	
	$Conteudo = str_replace('<%MSG%>', "Teste", $Conteudo);
	
?>