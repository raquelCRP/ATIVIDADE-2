<html>
<head>
<meta charset="utf-8">
<title>Exercício Desseseis</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 16) Faça um código em PHP que mostre um título centralizado explicando o que o código realiza e a data. Faça uma condição que valide um número para o tipo de sexo, sendo 1 ou 2 e guarde-o em uma variável. Logo abaixo mostre qual foi o valor atribuído e a qual sexo se refere, caso o valor seja 1 mostre na tela "Masculino", caso seja 2, mostre "Feminino".</h1>
<hr>
<?php
$escolha = 1;

switch($escolha)
{
	case "1": echo "SEXO: MASCULINO";
	break;
	case "2": echo "SEXO: FEMININO";
	break;
	default:
	echo "OPÇÃO INVALÍDA";
	break;
}
?>
</body>
</html>