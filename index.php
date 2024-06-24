<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Para no dividir entre 0
    if ($operacion === '/' && $num2 == 0) {
        echo "Error: No se puede dividir entre cero";
    } else {
        $resultado = calcular($num1, $num2, $operacion);
        echo "Resultado: $resultado";
    }
}
// FUNCION CALCULAR
function calcular($a, $b, $op) {
    switch ($op) {
        case '+':
            return sumar($a, $b);
        case '-':
            return restar($a, $b);
        case '*':
            return multiplicar($a, $b);
        case '/':
            return dividir($a, $b);
        default:
            return "Operación no válida";
    }
}
//FUNCION SUMAR
function sumar($a, $b) {
    return $a + $b;
}
//FUNCION RESTAR
function restar($a, $b) {
    return $a - $b;
}
//FUNCION MULTIPLICAR
function multiplicar($a, $b) {
    return $a * $b;
}
//FUNCION DIVIDIR
function dividir($a, $b) {
    return $a / $b;
}
?>

