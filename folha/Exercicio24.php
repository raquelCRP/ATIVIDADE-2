<html>
<head>
<meta charset="utf-8">
<title>Exercício vinte e quatro</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 24) Faça um código em PHP que mostre um título centralizado explicando o que o código realiza e a data. Faça uma condição que valide um numero para o tipo de sinalização, sendo 1 para Vermelho, 2 para amarelo e 3 para Verde. Guarde o número em uma variável. Logo abaixo mostre qual foi o valor atribuído e mostre a qual sinalização se refere. Em cada sinalização mostre na linha de baixo como é a orientação para o motorista. EX: No verde: pode seguir em segurança! Faça o teste para as três sinalizações.
<hr>
<?php
echo "<h1><center>Escolha de mês e o aviso de quantos dias o mês tem.</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$sinal = 2;

echo "<center>";
switch ($sinal)
{
	case "1": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Vermelho";
	echo "<br>";echo "<br>";
	echo "Instrução: Parar no sinal vermelho";
	break;
	
	case "2": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Amarelo";
	echo "<br>";echo "<br>";
	echo "Instrução: Diminuir velocidade";
	break;
	
	case "3": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Verde";
	echo "<br>";echo "<br>";
	echo "Instrução: Motorista pode avançar";
	break;
	
	default: echo "<h1><center>OPÇÃO INVALÍDA</h1></center>";
	break;
}
echo "</center>";
?>
</body>
</html>