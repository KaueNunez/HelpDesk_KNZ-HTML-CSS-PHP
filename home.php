<?php require_once 'validar_acesso.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Home</title>

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

        #chamados {
            background-color: white;
            margin: 30px 150px;
            padding: 50px;
        }

        .chamado{
            background-color: white;
            display: inline-block;
            padding-left: 200px;
        }
        p{  
            padding-top: 30px;
            text-align: center;
            font-weight: bold;
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
                    <li><a href="excluir_acesso.php">Sair</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
<br>
            <h1 style='text-align:center;'>Seja Bem-Vindo(a) <?php echo $_SESSION['tipo_usuario'] == 1 ? 'ADM' : $_SESSION["nome_usuario"];?></h1>

            <div id="chamados">

                <div class="chamado c1">
                    <a href="consultar_chamados.php"><img src="aberto.png" alt="" width='200px'></a>
                    <p>Consultar Chamados</p>
                </div>

                <div class="chamado c2">
                    <a href="abrir_chamados.php"><img src="adicionar-ficheiro.png" alt="" width='200px'></a>
                    <p>Adicionar Chamados</p>
                </div>

            </div>
        </div>

    </div>

</body>

</html>