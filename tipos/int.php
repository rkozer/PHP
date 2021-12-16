<div class="titulo">Tipo Inteiro</div>

<?php
echo 11;
echo '<br>';

var_dump(11);
echo '<br>';

echo PHP_INT_MAX, '<br>';
echo PHP_INT_MIN, '<br>';
echo 017, '<br>'; //se usar 0 antes do numero o sistema intepreta como sendo da base octal (numero de 0 a 7)
echo 0b11000011100, '<br>'; // base binária
echo 0x1117af0; '<br'; // base hexadecimal, depois do x pode-se incluir caracteres numéricos e letras de A até F
