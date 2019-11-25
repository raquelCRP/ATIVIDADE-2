<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Dois</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 02) Faça um código em PHP que atribua dois valores a duas variáveis quaisquer. O código deve mostrar na tela o valor e cada uma as variáveis em linhas separadas e no final mostrar a soma, com a seguinte frase:
A soma das variáveis (informar o valor da variável 1) + (informar o valor da variável 2) será: (informar o valor da soma).
OBS: A variável 1, variável 2  e  soma, devem estar concatenadas junto a frase final que informa o resultado da operação.
Faça duas validações do resultado da soma:
Caso o valor somado seja maior que ou igual a 20, este deverá ser apresentando somando-se a ele mais 8; 
E caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se a ele menos 5;</h1>
<hr>
<?php

$valorUm = 5;
$valorDois = 5;
$somaValor = $valorUm + $valorDois;

if ($somaValor>=20)
$somaValor = $somaValor+8;

	else
	$somaValor=$somaValor-5;

echo "A soma do valor: ".$valorUm." mais o valor: ".$valorDois." será: ".$somaValor;

?>
</body>
</html>