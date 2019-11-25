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
<h1>EXERCÍCIO 14) Faça um código em PHP que inicie uma variável com o valor de 02 e faça o incremento de 02 em 02 até que o valor da variável seja menor ou igual a 80.</h1>
<hr>
<?php
echo "<h1>O código fará o decremento do número 80 até ele ser maior ou igual a 2.</h1>";
$var = 80;

while($var > 2)
{
	$var = $var - 2;
	echo "=> ".$var; echo "<br>";
}
?>
</body>
</html>