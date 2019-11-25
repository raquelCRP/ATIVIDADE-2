<!DOCTYPE html>
<html>
<head>
<title> Questão A</title>
<meta charset = "utf-8">
</head>
<body>
<?php
echo "Incrementação de números até o valor de 150";
echo "<br>";

$var = 0;

while($var <= 150)
{
    $var = $var + 1;
    echo "=> ".$var;
    echo "<br>";
}
?>
</body>
</html>
