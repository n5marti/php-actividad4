
<?php
/*El algoritmo Bubble Sort compara elementos adyacentes en un array 
y los intercambia si están en el orden incorrecto. 
Esto se repite hasta que la lista esté ordenada.*/

function bubbleSortDescending(&$array)
{
    $n = count($array);
    // Recorremos el array varias veces
    for ($i = 0; $i < $n - 1; $i++) {
        // Comparar elementos adyacentes
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                // Intercambiar si no están en el orden correcto
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

// Lista de números con valores negativos y duplicados
$numbers = [5, -2, 8, -7, 3, 3, 0, -7];
echo "Lista original: " . implode(", ", $numbers) . "\n";

bubbleSortDescending($numbers);
echo "Lista ordenada (descendente): " . implode(", ", $numbers) . "\n";
?>
