<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="Estado">
        <option value="PR">Paraná</option>
        <option value="SC">Santa Caratina</option>
        <option value="RS">Rio Grande do Sul</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);

