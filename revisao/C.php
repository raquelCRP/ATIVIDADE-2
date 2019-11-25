<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Questão C</title>
</head>
<body>
<?php
echo"<h1><center>Escolha de dia da semana</center></h1>";
echo"<br>";

$dia = 8;

switch($dia)
{
    case "1": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Segunda - Feira</h2></center>";
	break;
	
	case "2": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Terça - Feira</h2></center>";
	break;
	
	case "3": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Quarta - Feira</h2></center>";
	break;
	
	case "4": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Quinta - Feira</h2></center>";
	break;
	
	case "5": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Sexta - Feira</h2></center>";
	break;
	
	case "6": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Sábado - Feira</h2></center>";
	break;
	
	case "7": echo "<h2><center>Dia escolhido: ";
	echo "<br>";
	echo "Domingo</h2></center>";
    break;
    
    default: echo "<h2><center>OPÇÃO INVÁLIDA</center></h2>";
    break;
}

?>
</body>
</html>
