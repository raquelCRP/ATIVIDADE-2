<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Seis</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 06) Faça um código em PHP que mostre na tela a sequencia de números pares de 1 a 10. E mostre na tela somente os números pares de 1 a 10
OBS: O de cada sequência deve ser mostrado em linhas separadas. </h1>
<hr>
<?php
$valor = 0;

for ($valor = -1; $valor <= 10; $valor ++)
{
$valor = $valor+1;
echo $valor;
echo "<br>";
}
?>

</body>
</html>