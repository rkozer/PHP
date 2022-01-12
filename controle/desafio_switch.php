<div class="titulo">Desafio Switch 01</div>

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
    .titulo {
        margin-top: 50px;
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
//$medidaformatada = number_format($result, 3, ',','.');
//$medidaformatada = number_format($_POST["param"], 0, '.', '.');

if ($result){
    echo $_POST["param"] . " ". $medida1 . " correspondem a " . $result . $medida2;
}
else {
    echo 'sem dados';
}


?>

<div class="titulo">Desafio Switch 02</div>

<form action="#" method="post">
    <input type="text" name="para">
    <select name="conversao2" id="conversao2">
        <option value="graus-fahrenheit">Graus > Fahrenheit</option>
        <option value="fahrenheit-graus">Fahrenheit > Graus</option>
    </select>
    <button>Calcular</button>
</form>

<?php

switch ($_POST["conversao2"]){
    case "graus-fahrenheit":
        $result1 = $_POST["para"] * 1.8 + 32;
        $medida1 = "graus Celsius";
        $medida2 = " graus Farenheit !";
        break;
    case "fahrenheit-graus":
        $result1 = ($_POST["para"] - 32) / 1.8;
        $medida1 = "graus Fahrenheit";
        $medida2 = " graus Celsius !";
        break;
    }

    if ($result1){
        echo $_POST["para"] . " ". $medida1 . " correspondem a " . $result1 . $medida2;
    }
    else {
        echo 'sem dados';
    }