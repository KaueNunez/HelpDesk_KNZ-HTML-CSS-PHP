<?php 

session_start();

$usuario_autenticado = false;

$usuarios = array();
$arquivo = fopen('usuario_cadastrados.hd','r');

while(!feof($arquivo)){
    $registros = fgets($arquivo);
    $usuarios[] = $registros.'<br>';
}

fclose($arquivo);

foreach($usuarios as $usuario){
    $user = explode('#',$usuario);

    if(($_POST['email'] == $user['1']) && ($_POST['senha'] == $user['2'])){
        $usuario_autenticado = true;
        $nome_usuario = $user['0'];
        $tipo_usuario = $user['3'];
        $email_usuario = $user['1'];
    }

}

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['nome_usuario'] = $nome_usuario;
    $_SESSION['email_usuario'] = $email_usuario;
    $_SESSION['tipo_usuario'] = $tipo_usuario;
    header('Location:home.php');
}else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location:index.php?login=erro');
}


?>