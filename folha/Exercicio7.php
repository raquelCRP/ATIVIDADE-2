<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Sete</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 07) Faça um código em PHP que mostre na tela a sequencia de números de 1 a 10 e mostrar a soma de todos eles.
OBS: O de cada sequência deve ser mostrado em linhas separadas. </h1>
<hr>
<?php

echo "Esse código mostrará à sequência de números de 1 a 10 e a soma dos números.";
echo "<br>";

$cont = 0;
$soma = 0;
while ($cont < 10)
{
$cont = $cont + 1;
echo $cont;
echo "<br>";
$soma = $soma + $cont;
}
echo "<br>";

echo "SOMA: ".$soma;

?>

</body>
</html>