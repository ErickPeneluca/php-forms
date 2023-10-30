<?php
session_start();
require('header.php');

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<form method="post" action="receiver.php">
    <label >
        Nome:
        <br>
        <input type="text" name="nome" id=""/>
    </label>
        <br>
        <br>
    </br>

    <label >
        email:
        <br>
        <input type="text" name="email" id=""/>
    </label>
        <br>
        <br>
    </br>

    <label >
        Idade:
        <br>
        <input type="text" name="idade" id=""/>
    </label>
        <br>
        <br>
    </br>


    <input type="submit" value="Enviar">
</form>