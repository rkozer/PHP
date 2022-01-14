<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4 , 'texto');
echo $lista . '<br>'; 
var_dump($lista);
echo '<br>';
print_r($lista);

$lista[0] = 1234; //altera o valor de um índice
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[4];

$texto = "Esse é um texto de teste";
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // cuidado! o php conta 2 índices para letras com ascento 
echo '<br>' . mb_strstr($texo, 10, 1); // nesse caso o mb_strstr é uma forma de conta letras simples, informe o índice e a quantidade de letras que deseja.

