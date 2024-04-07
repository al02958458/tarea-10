<?php
// Paso 1: Crear una variable llamada $edad y asignarle un valor numérico.
$edad = 25;

// Paso 2: Crear una expresión que calcule la edad que tendrás en 10 años y guardarla en una variable llamada $edad_futura.
$edad_futura = $edad + 10;

// Paso 3: Utilizar condicionales para mostrar un mensaje según la edad.
if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

echo "<br>";

// Paso 4: Utilizar un bucle para imprimir los números del 1 al 10 en orden ascendente.
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>";

// Paso 5: Crear una función que determine si un número es par o impar.
function esPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

// Paso 6: Utilizar un bucle para imprimir una lista de números pares del 20 al 40.
echo "Números pares del 20 al 40: ";
for ($i = 20; $i <= 40; $i++) {
    if (esPar($i)) {
        echo $i . " ";
    }
}
?>
