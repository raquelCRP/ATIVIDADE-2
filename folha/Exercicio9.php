<html>
<head>
<meta charset="utf-8">
<title>Exercício Nove</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 09) Faça um código em PHP que atribua três valores a três respectivas variáveis A,B,C. O código deverá validar esses valores, verificando três possibilidades: se A é maior que B; se A é maior que C; se A é maior que B e C. Ao final o código deverá apresentar uma frase como resultado: A é maior que B A é maior que C A é maior que B e C OBS: Utilize o comando de seleção IF/ELSE.</h1>
<hr>
<?php
//o código mostrará se o A é maior que B e C.
$a=0;
$b=2;
$c=1;
echo "Variável A: ".$a;
echo "<br>";
echo "Variável B: ".$b;
echo "<br>";
echo "Variável C: ".$c;
echo "<br>";
echo "<hr>";

if ($a>$b && $a>$c)
{
echo "Variável A: ".$a." é maior que B e C";
}

if  ($b>$a && $b>$c)
{
echo "Variável B: ".$b." é maior que A e C";
}

if ($c>$a && $c>$b)
{
echo "Variável C: ".$c." é maior que A e B";
}
?>
</body>
</html>