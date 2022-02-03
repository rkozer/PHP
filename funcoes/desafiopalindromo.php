<div class="titulo">Desafio Palíndromo</div>

<form action="#" method="post">
    <input type="text" value=<?= $_POST["0"] ?> name="0" id="0">
    <button>Enviar</button>
</form>

<?php

$palavra = $_POST["0"];

function ehPalindromo($palavra){
    if ($palavra === strrev($palavra)){
        return "É um palíndromo";
    } else{
        return "Não é um palíndromo";
    }
};

echo ehPalindromo($palavra);

echo "<hr><br>";

function palindromo($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return "Não";
        }
    }
    return "Sim";
};

echo palindromo($palavra);

echo "<hr><br>";

function palindromo2($palavra){
    return $palavra === strrev($palavra) ? "Sim, é palíndromo" : "Não é palíndromo";
};

echo palindromo($palavra);


echo "<hr><br>";

$a = 7;

function recursivo(){
    $soma = 1;
    for ($i = 7; $i >=1; $i--){
        $soma *= $i;
    }echo $soma . '<br>';
};

echo recursivo();

function recursivoDeVerdade($numero){
    if($numero === 1){
        return "1";
    } return $numero * recursivoDeVerdade($numero - 1);
};

echo recursivoDeVerdade(7);