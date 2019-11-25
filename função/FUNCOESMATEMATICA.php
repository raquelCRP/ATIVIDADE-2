<!DOCTYPE>
<html>
<head>
<meta charset="UTF=8"/>
<title>FUNÇOES MATEMÁTICA</title>
<style>
	h2 {font: 14pt arial;
		color? white;}
		
		
</style>
</head>
<body>
<div>
<?php
	$v1 = $_GET["x"];
	$v2 = $_GET["y"];
	echo "<h2>Valores recebidos: $v1 e $v2</h2>";
	
	echo "O valor absoluto de $v2 e " . abs($v2);
echo "<br>";
	echo "O valor de $v1<sup>$v2</sup> e " . pow($v2, $v1);
echo "<br>";
	echo "O raiz de $v1 e: ". sqrt($v2);
echo "<br>";
	echo "O valor de $v1 arredondado é: ". round($v1);
echo "<br>";
	echo "O valor de $v2 arredondado é: ". ceil($v2);
echo "<br>";
	echo "O valor de $v2 arredondado é: ". floor($v2);
echo "<br>";
	echo "A parte inteira de $v2 é: ". intval($v2);
echo "<br>";
	echo "O valor de $v1 em moeda é R$". number_format($v1, 2);
echo "<br>";
	echo "O valor de $v1 em moeda é R$". number_format($v1, 2, ",",".");
	
	
	

	
	
	
?>
</div>
</body>
</html>

	
