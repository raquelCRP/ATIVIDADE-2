<html>
<head>
<meta charset="utf-8">
<title>Exercício Dez</title>
</head>

<style>
h1{font-family: arial;
	font-size:18px;}
</style>

<body>
<h1>Exercício 10) Faça um código em PHP que atribua dois valores a duas respectivas variáveis da sua preferência. O código irá receber a operação a ser realizada por meio de uma terceira variável, que poderá receber ( +, - , * , / ). No caso receberá a operação uma vez (você terá que trocar a operação três vezes para testar as quatro operações). O código deverá validar a operação a ser realizada e realizá-la mostrando o resultado: A soma é igual a (variável 1 + variável 2) A subtração é igual a (variável 1 - variável 2) A multiplicação é igual a (variável 1 * variável 2) A divisão é igual a (variável 1 / variável 2) OBS: O valor da operação deve vir concatenado na frente da frase. Utilize o comando de seleção SWITCH.</h1>
<hr>
<?php
//o código mostrará o resultado de operações matemáticas utilizando o SWITCH.
$var1 = 5;
$var2 = 20;
$operacao = "-";

switch ($operacao)
{
case "+": echo "A soma é igual a: ".($var1+$var2);
break;
case "-": echo"A subtração é igual a: ".($var1-$var2);
break;
case "*": echo"A multiplicação é igual a: ".($var1*$var2);
break;
case "/": echo"A sivisão é igual a: ".($var1/$var2);
break;
}
?>
</body>
</html>