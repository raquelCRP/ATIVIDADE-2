<html>
<head>
<meta charset="utf-8">
<title>Exercício Oito</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 08) Faça um código em PHP que atribua um valor a variável X. O código deverá validar esse valor de X e apresentar como resultado um das seguintes possibilidades: Se X é negativo => O valor ___ é negativo Se X é positivo => O valor ___ é positivo OBS: Utilize o comando de seleção IF.</h1>
<hr>
<?php
//o código mostrará se o valor de X é negativo ou positivo.

$x = 10;

echo "O valor: ".$x;
echo "<br>";
if ($x>0)
echo "é positivo";

	if($x<0)
	echo "é negativo";
?>

</body>
</html>