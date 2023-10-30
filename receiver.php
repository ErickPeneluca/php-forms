<?php
session_start();

$name = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);


if ($name && $email && $idade) {
    echo 'Nome'.$name;
    echo "<br>";
    echo 'Email'.$email;   
    echo "<br>";

    echo 'Idade'.$idade;   

} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente';


    header("Location: index.php");
}
 