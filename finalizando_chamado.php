<?php 

session_start();

$titulo = str_replace('#','•',$_POST['titulo']);
$tipo = str_replace('#','•',$_POST['tipo']);
$descricao = str_replace('#','•',$_POST['descricao']);

$texto = $_SESSION['nome_usuario'].'#'.$_SESSION['email_usuario'].'#'.$titulo . '#' . $tipo . '#' . $descricao . PHP_EOL; // quebrar de linha;

$arquivo = fopen('arquivo.hd' , 'a');
fwrite($arquivo,$texto);
fclose($arquivo);

header('Location:abrir_chamados.php?finalizado=salvo');

?>