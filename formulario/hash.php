<?php

$senha = "curso123";
$senhaC = password_hash($senha, PASSWORD_DEFAULT);
$digitado = $_POST['senha'];

// echo $senha."<br>";
// echo $senhaC. "<br>";

// var_dump(password_verify($digitado, $senhaC));

if (password_verify($digitado, $senhaC)) {
    echo "Senha Correta";

}else {
    echo "Senha Incorreta";
}
    ?>
