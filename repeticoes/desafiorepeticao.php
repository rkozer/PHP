<div class="titulo">Desafio Repetição</div>

<?php

$array = ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF"];

for($i = 0; $i <=count($array); $i++ ){
    if($i % 2 === 0){
        echo "$array[$i] <br>";
    }
}

echo "<hr><br>";

foreach($array as $indice => $letras){
    if($indice % 2 === 1){
        continue;
    }
    echo "$letras <br>";
}

