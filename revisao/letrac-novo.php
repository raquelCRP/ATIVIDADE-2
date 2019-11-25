<html>
<head>
<meta charset="utf-8">
<title>Revisão (C)</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Revisão C) Faça um código em PHP que mostre um título centralizado explicando o que o código realiza e a data. Dê um número para o dia da semana, sendo 1 para domingo e assim por diante até o 07 para segunda. Escolher um número de 1 07 e mostrar o dia da semana correspondente. (Use a estrutura de repetição SWITCH/CASE).</h1>
<hr>
<?php
echo "<h1><center>Esse é um código que  mostra o dia da semana. </center></h1>";
echo "<br>"
echo "25/09/2019";

$semana=6;

switch ($semana)
{
	case "1": echo"Semana escolhida -> ";
	echo"<br>";
	echo"Domingo";
	break;
	
	case "2": echo "Semana escolhida -> ";
	echo"<br>";
	echo"Sabádo";
	break;
	
	case "3": echo"Semana escolhida -> ";
	echo"<br>";
	echo"Sexta";
	break;
	
	case "4": echo"Semana escolhida -> ";
	echo"<br>";
	echo"Quinta";
	break;
	
	case "5": echo"Semana escolhida -> ";
	echo"<br>";
	echo"Quarta";
	break;
	
	case "6": echo"Semana escolhida -> ";
	echo"<br>";
	echo"Terça";
	break;
	
	case "7": echo"Semana escolhida -> ";
	echo"<br>";
	echo"Segunda";
	break;
	
	default: echo "<h1><center>OPÇÃO INVÁLIDA</h1></center>";
	break;
}
?>
</body>
</html>