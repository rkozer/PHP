<div class="titulo">Desafio Tabela 02</div>

<form action="#" method="post">
    <input type="text" value=<?= $_POST["0"] ?? 1 ?> name="0" id="0">
    <input type="text" value=<?= $_POST["1"] ?? 1 ?> name="1" id="1">
    <input type="text" value=<?= $_POST["2"] ?? 1 ?> name="2" id="2">
    <button>Enviar</button>
</form>



<?php
$result = [$_POST];
//array_push($result, $_POST);


//$cesta = array("laranja", "morango");
//array_push($cesta, "melancia", "batata");

print_r($result);


//$result2 = array_push($result, $_POST);

//while($result = true){
//    echo "while(true) $contador <br>";
//    $contador++;
//    if($contador >= VALOR_LIMITE) break;
//}


?>

<table>
    <?php
        foreach($result as $linhas){
            echo "<tr>";
            foreach($linhas as $valor){
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
    ?>
</table>



<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>