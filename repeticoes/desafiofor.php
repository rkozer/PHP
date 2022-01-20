<div class="titulo">Desafio For</div>

<?php

$ast = "";

for($i = 0; $i <= 4; $i++){
    $ast .= "#";
    echo "$ast <br>";
}

echo "<hr><br>";

for($alt2 = "#"; $alt2 !== "######"; $alt2 .= "#"){
    echo "$alt2 <br>";
}