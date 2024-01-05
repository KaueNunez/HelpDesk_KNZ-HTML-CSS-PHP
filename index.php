<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        #header {
            background-color: cadetblue;
            padding: 20px;
            height: 40px;
        }

        #header h1 {
            margin-left: 30px;
            color: whitesmoke;
        }

        #header #menu {
            position: relative;
            top: -27px;
        }

        #header #menu li {
            float: right;
        }

        #header #menu li a {
            float: left;
            padding-right: 30px;
            color: whitesmoke;
            font-size: 20px;
        }

        #main {
            width: 100%;
        }

        #form {
            width: 500px;
            margin: 40px auto;
            padding: 15px 40px;
        }

        #form #login {
            text-align: center;
            font-size: 1.2em;
            font-family: Arial, Helvetica, sans-serif;
            color: cadetblue;
            padding-bottom: 5px;
            border-bottom: 1px solid cadetblue;
        }

        #form #formulario {
            margin-top: 20px;
        }

        #form #formulario label {
            color: darkcyan;
            text-transform: uppercase;
            font-weight: bold;
        }

        input[type=email] {
            width: 99%;
            margin-top: 8px;
            margin-bottom: 8px;
            color: darkcyan;
            padding: 2px;
        }

        input[type=password] {
            width: 99%;
            margin-top: 8px;
            margin-bottom: 8px;
            color: darkcyan;
            padding: 2px;
        }

        input[type=submit] {
            background-color: darkcyan;
            color: whitesmoke;
            border: none;
            border-radius: 10px;
            width: 120px;
            padding: 8px;
        }

        #button {
            margin-top: 12px;
            margin-left: 185px;
        }

        #form #final {
            margin-top: 25px;
            float: right;
        }

        #form span {
            color: darkcyan;
            font-weight: bold;
            font-size: 1.1em;
        }

        #form a {
            color: black;
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <div id="container">
        <div id="header">
            <a href="index.php">
                <h1>Help Desk - KNZ</h1>
            </a>

            <div id='menu'>
                <ul>
                    <li><a href="registro.php">Registrar</a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </div>
        </div>

        <div id="main">

            <div id="form">

                <div id="login">
                    <h1>Login</h1>
                </div>

                <div id="formulario">
                    <form action="validar_email.php" method="post">

                        <p>
                            <label for="email">E-mail:<br></label><input type="email" name="email" id="email">
                        </p>
                        <p>
                            <label for="senha">Senha:<br></label><input type="password" name="senha" id="senha">
                        </p>

                        <p id='button'>
                            <input type="submit" value="Login">
                        </p>

                    </form>

                    <br>

                    <?php

                    if ((isset($_GET['login'])) && ($_GET['login'] == 'erro')) {
                    ?>

                        <br><span style="color: red;">Usuario não existe.</span>

                    <?php
                    }

                    if ((isset($_GET['login']) && ($_GET['login']) == 'erro2')) {
                    ?>
                        <br><span style="color: red;">Você precisa fazer login para acessar as demais páginas.</span>

                    <?php
                    }

                    if ((isset($_GET['sessao']) && ($_GET['sessao']) == 'excluir')) {

                    ?>
                        <br><span style="color: red;">Deslogado!!!</span>
                    <?php
                    }

                    if ((isset($_GET['cadastro']) && ($_GET['cadastro']) == 'salvo')) {

                    ?>
                        <br><span style="color: darkgreen;">Cadastrado com sucesso!!!</span>
                    <?php
                    }

                    ?>

                </div>

                <div id="final">
                    <span>Você ainda náo tem conta???&ensp;</span><a href="registro.php">Cadastre-se aqui</a>
                </div>

            </div>
        </div>

    </div>

</body>

</html>