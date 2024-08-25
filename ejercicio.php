<?php  
$arr = [1, 2, 3, 4, 4, 4, 5, 5];

function encuentre($arr){
    $frecuencias = [];

    foreach($arr as $e) {
        if (array_key_exists($e, $frecuencias)) {
            $frecuencias[$e]++;
        } else {
            $frecuencias[$e] = 1;
        }
    }

    foreach($frecuencias as $numero => $frecuencia) {
        echo "Numero $numero: $frecuencia veces\n";
    }
}

encuentre($arr);
?>
