<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>ATIVIDADE 4 - Função Ternário </title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
</style>
</head>
<body>
<div>
<?php
$R1 = $_GET["r1"];
$R2 = $_GET["r2"];
$tipo = $_GET["r3"];

echo "Os valores passados foram $R1 e $R2 <br>";

$r = ($tipo == "s") ? $R1+$R2 : $R1*$R2;

echo "O resultado sera $r";




?>
</div>
</body>
</html>