<div class="titulo">For Each</div>

<?php

$array = [ "domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];

foreach ($array as $valor){
    echo "$valor <br>";
}

foreach ($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$alfa = [
    ["a", "e", "i", "o", "u"],
    ["b", "c", "d"]];

foreach ($alfa as $linhas){
    foreach ($linhas as $letras){
        echo $letras;
    } 
    echo '<br>';
}

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as &$dobrar){
    echo $dobrar *= 2;
}
echo '<br>';
print_r($numeros);