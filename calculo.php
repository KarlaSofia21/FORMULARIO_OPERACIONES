<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'suma':
        $resultado = $valor1 + $valor2;
        echo "Resultado=".$resultado;
        break;
        case 'resta':
        $resultado = $valor1 - $valor2;
        echo "Resultado=".$resultado;
        break;
        case 'multiplicacion':
        $resultado = $valor1*$valor2;
        echo "Resultado=".$resultado;
        break;
        case 'division':
        if ($num2 != 0) {
            $resultado = $valor1 / $valor2;
        } else {
         echo "<p>No se puede dividir entre cero</p>";
        }
        echo "Resultado=".$resultado;
        break;
        default:
        $resultado='Error: Operacion no valida';
        break;

}
?>
