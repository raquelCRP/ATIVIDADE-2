<html>
<head>
<meta charset="utf-8"/>
<title>Exercício Cinco</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 05) Faça um código em PHP que mostre na tela a sequencia de números de 1 a 10.
OBS: O de cada sequência deve ser mostrado em linhas separadas. </h1>
<hr>
<?php
$contador=0;
while($contador < 10)
{
$contador = $contador+1;
echo $contador;
echo "<br>";
}
?>
</body>
</html>