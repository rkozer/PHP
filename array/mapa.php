<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => 'vermelho',
    "peso" => 48.5
);

echo '<br>' . $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];

$lista = array('a', 'b', 'c');
echo '<br>'; 
print_r($lista);

$lista[] = 'd';
echo '<br>';
print_r($lista);

$lista['letra'] = 'e';
echo '<br>';
print_r($lista);


$meses = array(
    1 => "janeiro",
    "Fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"  
);

echo '<br>' . $meses[12];