<?php

/*
2.	Problema de Ordenar Lista con Merge Sort: Implementa una función que ordene una lista de palabras 
alfabéticamente utilizando el algoritmo Merge Sort. Muestra la lista antes y después de aplicar el algoritmo.

Merge Sort divide el array en dos mitades, las ordena recursivamente y luego combina las mitades ordenadas
*/

function mergeSort($array) {
    if (count($array) <= 1) {
        return $array;
    }

    // Dividir el array en mitades
    $middle = floor(count($array) / 2);
    $left = mergeSort(array_slice($array, 0, $middle));
    $right = mergeSort(array_slice($array, $middle));

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

// Lista de palabras desordenada
$words = ["manzana", "uva", "limón", "naranja", "pera", "uva"];
echo "Lista original: " . implode(", ", $words) . "\n";

$sortedWords = mergeSort($words);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $sortedWords) . "\n";

/*
Lista original: manzana, uva, limón, naranja, pera, uva
Lista ordenada (alfabéticamente): limón, manzana, naranja, pera, uva, uva
*/
?>
