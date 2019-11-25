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
<h1>EXERCÍCIO 15) Faça um código em PHP que inicie uma variável com o valor de 80 e faça o decremento de 02 em 02, enquanto o número for maior ou igual a 02.</h1>
<?php
echo "<h1>Esse código fará o incremente de uma variável de valor 02 até que o valor seja igual ou menor que 80.</h1>";
echo "<br>";

$var = 2;
while ($var <80)
{
	$var = $var + 2;
	echo "=> ".$var; echo "<br>";
}	
?>
</body>
</html>