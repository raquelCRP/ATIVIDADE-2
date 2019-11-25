<html>
<head>
<meta charset = "utf-8">
<title>Exercício Oito</title>
</head>
<body>
<?php
$varum = 5;
$vardois = 10;
$soma = $varum + $vardois;

echo "Variável um: ".$varum;
echo "<br>";
echo "Variável dois: ".$vardois;
echo "<br>";
echo "Variável soma: ".$soma;
echo "<br>";
echo "<hr>";

if ($soma >= 20)
{
$soma = $soma + 2;
echo "O valor da variável SOMA com acréscimo de 2 em seu valor é: ".$soma;
}

else
{
$soma = $soma - 4;
echo "O valor da variável SOMA com decréscimo de 4 em seu valor é: ".$soma;
}

?>
</body>
</html>