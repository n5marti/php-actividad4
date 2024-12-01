<?php
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
?>
