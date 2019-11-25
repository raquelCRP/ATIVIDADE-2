<!DOCTYPE html>
<html>
<head>
<title> Questão I</title>
<meta charset = "utf-8">
</head>
<body>
<?php
echo "<h1><center>Verificação de intervalo e se o número é ímpar ou par.</center></h1>";
echo "<br>";

$var = 45;

echo "VALOR: ".$var;
echo "<br>";

if(($var >= 10) && ($var <= 100))
{
    echo "O valor está dentro do intervalo de 10 a 100.";
    echo "<br>";
}
else
{
    echo "O valor não está dentro do intervalo de 10 a 100.";
    echo "<br>";
}

if($var % 2 == 0)
{
    echo "Esse número é par.";
}
else
{
    echo "Esse número é ímpar.";
}
?>
</body>
</html>
