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
<h1>EXERCÍCIO 13) Faça um código em PHP que inicie uma variável com o valor de 50 e divida esse valor por 10. Após esse procedimento faça o incremento de 50. Esse procedimento deve ser repetido enquanto o valor da variável for menor ou igual a 250.</h1>
<hr>
<?php
echo "<h1>Esse código dividirá o número 50 por 10 até ser igual ou menos que 250.</h1>";
echo "<br>";

$valor = 50;
$divValor;

while ($divValor < 250)
$divValor = ($valor + 50) / 50;	
echo "=> ".$divValor; echo "<br>";
?>
</body>
</html>