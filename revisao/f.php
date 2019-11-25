<!DOCTYPE html>
<html>
<head>
<title> Questão F</title>
<meta charset = "utf-8">
</head>
<body>
<?php
echo "<h1><center>Incrementação do número 5 até 205</center></h1>";
echo "<br>";

$var = 0;

while($var < 205)
{
    $var = $var + 5;
    echo "=> ".$var;
    echo "<br>";
}
?>
</body>
</html>
