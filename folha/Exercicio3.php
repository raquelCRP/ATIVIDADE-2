<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Três</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 03) Faça um código em PHP que atribua um valor à variável número e valide para certificar se o valor atribuído é igual a zero, menor que zero ou maior que zero. O código deve mostrar na tela o valor que foi atribuído a variável número e logo em seguida informar o resultado da validação, ou seja, se é: igual a zero, menor que zero ou maior que zero.
OBS: O valor atribuído ao número e o resultado da validação deve ser mostrado em linhas separadas. </h1>
<hr>
<?php
$valor=-1;

echo "Valor da variável: ".$valor;
echo "<br>";
if($valor==0)
echo "É IGUAL a 0";


	if($valor<0)
	echo "É MENOR que 0";
	
	
		if($valor>0)
		echo "É MAIOR que 0";
		
?>

</body>
</html>