
<?php
    error_reporting(0);
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Operações aritmética</title>
</head>
<body>
    <fieldset>
        <legend>Mini calculadora</legend>
        <form action="" method="get">
            <label for="n1">Digite um numero</label>
            <input type="number" name="n1" id="n1">
            <label for="n2">Digite o segundo numero</label>
            <input type="number" name="n2" id="n2">
            <button>Calcular</button>             
        </form>

        <?php
            if($n2||$n1 != 0){
                echo " <br> A soma vale ". ($n1 + $n2);
                echo " <br> A subtração vale ". ($n1 - $n2);
                echo " <br> A multiplicação vale ". ($n1 * $n2);
                echo " <br> A divisão vale ". ($n1 / $n2);
                echo " <br> O modulo vale ". ($n1 % $n2);
                echo " <br> A media aritmética é ".($n1 + $n2) / 2;
            }
        ?>
    </fieldset>
</body>
</html>

    

