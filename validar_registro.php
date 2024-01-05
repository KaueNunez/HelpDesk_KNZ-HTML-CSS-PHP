<?php

session_start();

$usuario1 = str_replace('#', '•', $_POST['usuario']);
$email = str_replace('#', '•', $_POST['email']);
$senha = str_replace('#', '•', $_POST['senha']);

$cadastro = $usuario1 . '#' . $email . '#' . $senha . '#' . '2' . PHP_EOL;

$arquivo = fopen('usuario_cadastrados.hd', 'a');
fwrite($arquivo, $cadastro);
fclose($arquivo);

header("Location:index.php?cadastro=salvo");

?>
