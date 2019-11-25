<!DOCTYPE html>
<html>
<head>
<title> Questão K</title>
<meta charset = "utf-8">
</head>
<body>
<?php
echo "<h1><center>Verificação se X é maior que Y e Z.</center></h1>";
echo "<br>";

$X = 2;
$Z = 4;
$Y = 6;

echo "VALOR: ".$X;
echo "<br>";

if($X > $Y && ($X > $Z))
{
    echo "X é maior que Y e Z";
    echo "<br>";
}

else
{
    echo "X é menor que Y e Z";
    echo "<br>";
}

?>
</body>
</html>
