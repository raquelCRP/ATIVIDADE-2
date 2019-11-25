<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Quatro</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 04) Faça um código em PHP que atribua um valor à variável número e valide para certificar se o valor atribuído está no intervalo de 20 a 80.
O código deve mostrar na tela o valor que foi atribuído a variável número e logo em seguida informar o resultado da validação, ou seja, se está no intervalo de 20 a 80.
OBS: O valor atribuído ao número e o resultado da validação deve ser mostrado em linhas separadas. </h1>
<hr>
<?php

$valor = 9;

if($valor > 20 && $valor < 80);
echo "O valor: ".$valor;
echo "<br>";
echo " está no intervalo de 20 a 80";
?>

</body>
</html>