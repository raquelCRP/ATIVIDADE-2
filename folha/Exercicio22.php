<html>
<head>
<meta charset="utf-8">
<title>Exercício vinte e dois</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 22) Faça um código em PHP que mostre um título centralizado explicando o que o código realiza e a data. Faça um laço de repetição que avalie um intervalo de números de 1 a 200 e mostre um em cada linha, quais são os números primos do intervalo. Lembrete: Números primos são os números naturais que têm apenas dois divisores diferentes: o 1 e ele mesmo.
<hr>
<?php
echo "<h1><center>Mostrará os números primos do intervalo de 1 a 200. DANDO ERRO</h1></center>";
echo "<br>";
echo "18/09/2019";
echo "<br>";
echo "<hr>";

$num;
$primo;

while($num <=200)
{
	if($num / 1 == $num)
	{
		echo "=> ".$num;
	}
	
	else if($num / $num == 1)
	{
		echo "=> ".$num;
	}
	
}
?>
</body>
</html>