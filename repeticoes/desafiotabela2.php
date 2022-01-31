<div class="titu">Desafio Tabela 02</div>

<form action="#" method="post">
    <input type="text" name="0">
    <input type="text" name="1">
    <input type="text" name="2">
    <button>Enviar</button>
</form>



<?php
$result = [($_POST)];

$result2 = array_push($result, $_POST);
//print_r($result);

//echo $result;
//print_r($_result);


//foreach($result as $linhas){
//        echo "$linhas ";
//    }
//    echo "<br>";

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