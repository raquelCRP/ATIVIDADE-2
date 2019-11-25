<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>ATIVIDADE 4</title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
</style>
</head>
<body>
<div>
<?php
$atual = $_GET["atual"];

	
	echo "O ANO ANTERIOR É ". $atual;
	echo "<br>";
	$atual=$atual--;
	echo "O ANO ATUAL É ". $atual;
	echo "<br>";
	echo "<br>";
	echo "O ANO ANTERIOR É ". $atual;
	echo "<br>";
	$atual--;
	echo "O ANO ATUAL É ". $atual;
	
	


?>
</div>
</body>
</html>