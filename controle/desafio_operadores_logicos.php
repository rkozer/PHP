<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça-feira):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta-feira):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button, select {
        font-size: 1.8rem;
        
    }
</style>

<?php
  

if(!!$_POST["t1"] == true && !!$_POST["t2"] == true){
    echo "Será comprada a TV de 50 polegadas e tomado sorvete !";
}
elseif(!!$_POST["t1"] == false xor !!$_POST["t2"] == false){
    echo "TV de 32 polegadas e sorvete !";
}
else echo "Fica em casa mais saudável !";