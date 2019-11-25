<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Um</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 01) Faça um código em PHP que atribua dois valores a duas variáveis quaisquer. O código deve mostrar na tela o valor e cada uma das variáveis em linhas separadas e no final mostrar a soma, com a seguinte frase:
A soma das variáveis será: (informar o valor a soma).
OBS: O valor da variável SOMA deve estar concatenado e aparecer na frente da frase.
</h1>
<hr>
<?php
//Faz a soma de duas variáveis e mostra o resultado.

echo "Soma de dois valores";
echo "<br>";
$valorUm = 5;
$valorDois = 10;
$somaValor = $valorUm + $valorDois;

echo "A soma das variáveis são: ".$somaValor;
?>

</body>
</html>