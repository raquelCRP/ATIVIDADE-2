<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>ATIVIDADE 9</title>
<style>
	h2 {font: 14pt arial;
		color: white;}
	body{background-color: #A9A9A9;}
</style>
</head>
<body>
<div>
<?php
$nota1 = $_GET ["n1"];
$nota2 = $_GET ["n2"];

$m = ($nota1+$nota2)/2;

	echo "A media das notas entre $nota1 e  $nota2 e = $m <br/>";
	
	$sit = ($m>=6)?"APROVADO" :"REPROVADO";
	
	echo "A situação do aluno é: $sit ";
	


?>
</div>
</body>
</html>