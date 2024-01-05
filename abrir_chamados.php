<?php require_once 'validar_acesso.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir Chamados</title>

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

        #main #formulario {
            margin: 45px auto;
            margin-bottom: 15px;
            width: 600px;
            padding: 20px;
        }

        label {
            font-size: 20px;
            color: cadetblue;
            font-weight: bold;
        }

        select {
            color: cadetblue;
            font-weight: bold;
        }

        form {
            text-align: center;
        }

        input[type=text]{
            padding: 2px;
            height: 10px;
        }


        input[type=submit] {
            background-color: darkcyan;
            color: whitesmoke;
            border: none;
            border-radius: 10px;
            width: 120px;
            padding: 8px;
        }

        #mensagem{
           margin-left: 570px;
        }

        span {
            color: darkblue;
        }
    </style>

</head>

<body>

    <div id="container">
        <div id="header">
            <a href="home.php">
                <h1>Help Desk - KNZ</h1>
            </a>

            <div id='menu'>
                <ul>
                    <li><a href="home.php">Voltar</a></li>
                </ul>
            </div>
        </div>

        <div id="main">

            <div id="formulario">

                <h1 style="text-align: center;margin-bottom:20px; color:cadetblue;">Abrir Chamado</h1>

                <form action="finalizando_chamado.php" method="post">

                    <p>
                        <label for="titulo">Titulo: </label><br><input type="text" name="titulo" id="titulo">
                    </p>

                    <p>
                        <label for="tipo">Tipo: </label><br><select name="tipo" id="tipo">
                            <option value="Desenvolvimento">Desenvolvimento</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Financeiro">Financeiro</option>
                        </select>
                    </p>

                    <p>
                        <label for="descricao">Descrição: </label><br><textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                    </p>

                    <br><br>

                    <input type="submit" value="Enviar">

                </form>


            </div>

            <div id="mensagem">

                <?php

                if (isset($_GET['finalizado']) && $_GET['finalizado'] == 'salvo') {
                    echo '<span>Chamado Cadastrado com sucesso!!!</span>';
                }

                ?>

            </div>


        </div>

    </div>

</body>

</html>