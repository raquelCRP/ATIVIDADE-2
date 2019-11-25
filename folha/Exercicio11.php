<html>
<head>
<meta charset="utf-8">
<title>Exercício Onze</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 11) Faça um código em PHP que atribua dois valores a duas respectivas variáveis da sua preferência. O código irá validar o valor da primeira variável, verificando se ela é menor que a segunda variável, caso seja, o código deverá incrementar 1 a primeira variável e decrementar 1 na segunda variável e logo após, saltar uma linha. A cada execução da condição, deverá ser mostrada: A variável1 é igual ___ (valor da variável1 com incremento) A variável1 é igual ___ (valor da variável2 com incremento) O código deverá ser executado e mostrado os resultados até que a condição seja satisfeita (até que o valor da variável1 seja menor que o valor da variável2). OBS: O valor da variável1 e da variável2 após o incremento e o decremento, deve ser mostrado lado a lado, toda vez que a condição for executada. Utilize o comando de repetição WHILE.</h1>
<hr>
<?php
//o código mostrará o valor de duas variáveis, e se a variável 1 é menor que a 2, se for, será incrementado mais 1 a variável 1, senão for, será decrementado 1 da variável 2.
$var1 = 10;
$var2 = 11;
while ($var1 < $var2)
{
$var1 = $var1 + 1;
$var2 = $var2 - 1;
echo "A variável 1 é igual: ".$var1;
echo "<br>";
echo "A variável 2 é igual: ".$var2;
echo "<br>";
echo "<hr>";
}
?>
</body>
</html>