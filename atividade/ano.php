<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>Idade </title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
	.button{border: 1px solid #FFFF00;}
	
	
	
</style>
</head>
<body>
<div>
<?php
$Idade = 18;
$Dirigir;
$Ano;

	$Ano = isset($_GET("ano"))?$_GET["ano"]:2001;
	$Idade = date("Y") - $Ano;
	echo "VocÇe nasceu no ano de $Ano E TERA $Idade ano";
	
	
		
?>
</div>
</body>
</html>