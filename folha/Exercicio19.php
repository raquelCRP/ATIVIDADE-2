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
<h1>Exercício 19) Faça um código em PHP que mostre um título centralizado explicando o que o código realiza e a data. Faça um laço de repetição que avalie um intervalo de números de 1 a 200 e mostre quantos são os números ímpares do intervalo.</h1>
<hr>
<?php
$cont = 0;
$impar;
echo "<h1><center>Avaliará um intervalo de 1 a 200 e mostrará quantos números ímpares têm.</h1></center>";
echo "<br>";
echo "DATA: 12/09/2019";
echo "<br>";
echo "<hr>";
for($cont = 0; $cont <= 200; $cont++)
{
	echo $cont.", ";
		if($cont % 2 != 0)
		{
			$impar = $impar + 1;
		}
}				
echo "<br>";
echo "<hr>";
echo "No intervalo de 1 a 100, existem: ".$impar." números ÍMPARES.";
?>
</body>
</html>