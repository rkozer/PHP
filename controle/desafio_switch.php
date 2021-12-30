<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="Km-metro">Km > Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
        background-color: #DCDCDC;
        border-radius: 10px;
        box-shadow: -7px 4px 16px -1px rgba(0,0,0,0.75);
        border-width: solid;
        border-style: solid;
    }
    input {
        background-color: #DCDCDC;
        color: #006400;
        
    }
    button {
        background-color: red;
        border-color: #8B0000;
    }
</style>

<?php

switch ($_POST["conversao"]){
    case "km-milha":
        $result = $_POST["param"] * 0.621371;
        $medida1 = "quilômetro(s)";
        $medida2 = " milha(s) !";
        break;
    case "milha-km":
        $result = $_POST["param"] * 1.60934;
        $medida1 = "milha(s)";
        $medida2 = " quilômetro(s) !";
        break;
    case "metro-km":
        $result = $_POST["param"] * 0.001;
        $medida1 = "metro(s)";
        $medida2 = " quilômetro(s) !";
        break;
    case "Km-metro":
        $result = $_POST["param"] * 1000;
        $medida1 = "quilômetro(s)";
        $medida2 = " metro(s) !";
        break;
}
$medidaformatada = number_format($result, 3, '.', '.');
//$medidaformatada = number_format($_POST["param"], 0, '.', '.');

echo $_POST["param"] . " ". $medida1 . " correspondem a " . $medidaformatada . $medida2;

?>