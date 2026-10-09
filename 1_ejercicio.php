<?php

$numero1 = 22;
$numero2 = 23;
$numero3 = 22; //52

if ($numero1 == $numero2 && $numero3 == $numero2) {
    echo "todos los numeros son iguales";
} else {

    if ($numero1 == $numero2) {
        if ($numero1 > $numero3) {
            echo "el numero 1: {$numero1} y el numero 2: {$numero2} son iguales y el numero 3: {$numero3} es menor";
        } else {
            echo "el numero 1: {$numero1} y el numero 2: {$numero2} son iguales y el numero 3: {$numero3} es mayor";
        }
    } else {
        if ($numero1 == $numero3) {
            if ($numero1 > $numero2) {
                echo "el numero 1: {$numero1} y el numero 3: {$numero3} son iguales y el numero 2: {$numero2} es menor";
            } else {
                echo "el numero 1: {$numero1} y el numero 3: {$numero3} son iguales y el numero 2: {$numero2} es mayor";
            }
        }
    }
    if ($numero2 == $numero3) {
        if ($numero2 > $numero1) {
            echo "el numero 2: {$numero2} y el numero 3: {$numero3} son iguales y el numero 1:  {$numero1} es menor";
        } else {
            echo "el numero 2: {$numero2} y el numero 3: {$numero3} son iguales y el numero 1: {$numero1} es mayor";
        }
    }
}

if ($numero1 > $numero2 && $numero1 > $numero3) {
    if ($numero2 > $numero3) {
        echo "el numero numero 1: {$numero1} es el mayor <br>";
        echo "el numero numero 2: {$numero2} es el del medio<br>";
        echo "el numero numero 3: {$numero3} es el menor<br>";
    } else {
        echo "el numero 1: {$numero1} es el mayor <br>";
        echo "el numero 2: {$numero2} es el menor<br>";
        echo "el numero 3: {$numero3} es el del medio<br>";
    }
}
if ($numero2 > $numero1 && $numero2 > $numero3) {
    if ($numero3 > $numero1) {
        echo "el numero 2: {$numero2} es el mayor <br>";
        echo "el numero 1: {$numero1} es el menor<br>";
        echo "el numero 3: {$numero3} es el del medio<br>";
    } else {
        echo "el numero 2: {$numero2} es el mayor <br>";
        echo "el numero 3: {$numero3} es el menor<br>";
        echo "el numero 1: {$numero1} es el del medio<br>";
    }
}
if ($numero3 > $numero1 && $numero3 > $numero2) {
    if ($numero2 > $numero1) {
        echo "el numero 3: {$numero3} es el mayor <br>";
        echo "el numero 1: {$numero1} es el menor<br>";
        echo "el numero 2: {$numero2} es el del medio<br>";
    } else {
        echo "el numero 3: {$numero3} es el mayor <br>";
        echo "el numero 2: {$numero2} es el menor<br>";
        echo "el numero 1: {$numero1} es el del medio<br>";
    }
}
