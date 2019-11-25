<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Questão D</title>
</head>
<body>
<?php
echo "<h1><center>Tabuada</center></h1>";
echo "<br>";
$num = 1;

switch ($num) {
    case '1':
    $num1 = 1;
    $num2 = 0;
    
        echo("Você escolheu a operação de Soma.  </br>");

        while ($num2 < 10) {

            $num2++;
            $result = $num1 + $num2;
            $result1 = $result;

            echo($num1 . " + " . $num2 . " = " . $result . "</br>");
            
        }

        echo("Soma de todos os resultados. " . $result1);

        break;

    case '2':
    $num1 = 0;
    $num2 = 1;
    
        echo("Você escolheu a operação de Subtração. </br>");

        while ($num1 < 10) {
            $num1++;
            
            $result = $num1 - $num2;
            $result2 = $result * 5;

            echo($num1 . " - " . $num2 . " = " . $result . "</br>");
            
        }

        echo("Soma de todos os resultados. " . $result2);

        break;

   
    case '3':

    $num1 = 1;
    $num2 = 0;
    
        echo("Você escolheu a operação de Multiplicação. </br>");

        while ($num2 < 10) {

            $num1++;
            $num2++;
            $result = $num1 * $num2;
            $result3 = $result * 4;
            
            echo($num1 . " * " . $num2 . " = " . $result . "</br>");
            
        }

        echo("Soma de todos os resultados. " . $result3);

        break;

        case '4':

        $num1 = 0;
        $num2 = 1;
        
            echo("Você escolheu a operação de Divisão. </br>");
    
            while ($num1 < 10) {
                
                $num1++;
                $num2++;
                $result = $num1 / $num2;
                $result4 = $result * 5;
                
    
                echo($num1 . " / " . $num2 . " = " . $result . "</br>");
                
                
            }

            echo("Soma de todos os resultados. " . $result4);

            break;

            default: echo "Opção Inválida";
            break;


}
?>
</body>
</html>