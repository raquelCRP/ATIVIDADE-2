<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>CURSO DE PHP </title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
	.button{border: 1px solid #FF0000;}
	
	
</style>
</head>
<body>
<div>
<?php
$RAIZ =$_GET["v"];
$rq = sqrt($RAIZ);
	echo"A RAIZ DE $RAIZ É IGUAL A: " . number_format($rq,2);
	
?>
	<a class= "button" href="html.php"> VOLTAR </a>

</div>
</body>
</html>