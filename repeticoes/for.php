<div class="titulo">Laço For</div>

<?php

for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>"; 
}

echo "<hr><br>";


for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr><br>";

for (; $cont <= 15 ;){
    echo "$cont <br>";
    $cont++;
}

echo "<hr><br>";

$array = [ "domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];
print_r($array);

echo "<hr><br>";

for ($i = 0; $i <= count($array); $i++){
    echo "$array[$i] <br>";
}

$letras = [
    ["a", "e", "i", "o", "u"],
    ["b", "c", "d"]
];

for ($i = 0; $i <= count($letras); $i++){
    for ($j = 0; $j <= count($letras[$i]); $j++){
    echo "{$letras[$i][$j]}";
    };
echo "<br>";
}