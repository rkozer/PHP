<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadoscompletos = $dados1 + $dados2; 

print_r($dadoscompletos);

echo '<br>' . is_array($dadoscompletos);
echo '<br>' . count($dadoscompletos);
echo '<br>';

$indice = array_rand($dadoscompletos);
echo "$indice = $dadoscompletos[$indice]";
echo '<br>';
echo "{$dadoscompletos['idade']}";

unset($dadoscompletos['nome']);
echo '<br>';
print_r($dadoscompletos);

unset($dadoscompletos);
echo '<br>';
var_dump($dadoscompletos);

$impares = [1, 3, 5, 7 , 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $impares + $pares;
echo '<br>'; 
print_r($decimais); 

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);

$personagens = ["Elza", "Raponzel", "Branca de Neve", "Cinderela"];
$resultado = array_rand($personagens);
echo '<br>';
echo "<div center><h1>$personagens[$resultado]</h1></div>";

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>
