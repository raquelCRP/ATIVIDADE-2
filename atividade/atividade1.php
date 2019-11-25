<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>ATIVIDADE 1</title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
</style>
</head>
<body>
<div>
<?php
$preco = $_GET["x"];
$novo;
	
	echo "O PREÇO SERÁ R$ ". number_format($preco,2);
	echo "<br>";
	
	$novo = ($preco * 10)/100;
	$preco+=$novo;
	
	echo "O NOVO PREÇO COM OS 10% ACRÉSCIMO SERÁ R$ ". number_format($preco,2, ",",".");
	echo "<br>";




?>
</div>
</body>
</html>