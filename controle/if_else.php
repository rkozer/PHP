<div class="titulo">If Else</div>

<?php

$idade = 30;
$alt = 1.70;
$nome = "Ricardo";

if($idade == 30 && $alt == 1.70 && $nome == "Ricardo") {
    echo 'Esse sou eu!';
} else {
    echo 'Não sou eu!';
}

echo "<p class = 'divisao'>Exemplo 'or', apenas uma condição precisa ser verdadeira<hr></p>";

$idade2 = 30;
$alt2 = 1.70;
$nome2 = "Ricardo";

if($idade2 == 31 or $alt2 == 1.60 or $nome2 == "Ricard") {
    echo 'Parece comigo!';
} else {
    echo 'Não sou eu!';
}

echo "<p class = 'divisao'>Exemplo 'xor', duas condições verdadeira ou falsas retornam 'false'<hr></p>";

$idade3 = 30;
$alt3 = 1.70;

if($idade3 == 30 xor $alt3 == 1.70) {
    echo 'É um pouco parcido comigo!';
} else {
    echo 'Parece muito comigo!';
}
