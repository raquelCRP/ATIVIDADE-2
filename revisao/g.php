<!DOCTYPE html>
<html>
<head>
<title> Questão G</title>
<meta charset = "utf-8">
</head>
<body>
<?php
echo "<h1><center>Verificação de soma</center></h1>";
echo "<br>";

$varA = 30;
$varB = 6;
$soma = $varA + $varB;

echo "O valor da variável A: ".$varA." mais a variável B: ".$varB." resultam no valor: ".$soma;
echo "<br>";
if($soma >=30)
{
    $soma = $soma + 10;
    echo "O valor da soma é: ".$soma;
}
else
{
    $soma = $soma - 5;
    echo "O valor da soma é: ".$soma;
}
?>
</body>
</html>
