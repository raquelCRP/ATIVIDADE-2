<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>ATIVIDADE 2</title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
</style>
</head>
<body>
<div>
<?php
$preco = $_GET["preco"];
$novo;
	
	echo "O PREÇO SERÁ R$ ". number_format($preco,2);
	echo "<br>";
	$novo = ($preco * 10)/100;
	$preco-=$novo;
	echo "O	PREÇO COM 10% DE DESCONTO SERÁ R$ ". number_format($preco,2, ",",".");
	




?>
</div>
</body>
</html>