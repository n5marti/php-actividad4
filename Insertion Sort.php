<?php

/*
3.	Problema de Ordenar Lista con Insertion Sort:Crea un script que ordene una lista de nombres en orden 
alfabético utilizando el algoritmo Insertion Sort. Muestra la lista antes y después de aplicar el algoritmo.

Insertion Sort recorre el array y coloca cada elemento en la posición correcta comparándolo con los elementos anteriores.
*/

function insertionSort(&$array) {
    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        // Mover los elementos mayores al final
        while ($j >= 0 && strcmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        // Colocar el elemento en su posición correcta
        $array[$j + 1] = $key;
    }
}

// Lista de nombres desordenada
$names = ["Carlos", "Ana", "Elena", "Benito", "Diana"];
echo "Lista original: " . implode(", ", $names) . "\n";

insertionSort($names);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $names) . "\n";

/*
Lista original: Carlos, Ana, Elena, Benito, Diana
Lista ordenada (alfabéticamente): Ana, Benito, Carlos, Diana, Elena

*/
?>
