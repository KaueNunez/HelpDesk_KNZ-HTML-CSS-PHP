<?php require_once 'validar_acesso.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Chamados</title>

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

        #main #chamado {
            margin-top: 40px;
            margin-left: 50px;
            display: inline-flex;
            flex-direction: column;
            background-color: whitesmoke;
            border: 1px solid cadetblue;
            color: cadetblue;
            width: 355px;
            height: 280px;
            padding: 15px;
            border-radius: 15px;
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

            <?php

            $chamados = array();
            $arquivo = fopen('arquivo.hd', 'r');

            while (!feof($arquivo)) {
                $registros = fgets($arquivo);
                $chamados[] = $registros . '<br>';
            }

            fclose($arquivo);

            foreach ($chamados as $chamado) {

                $chamados_final = explode('#', $chamado);

                if ($_SESSION['tipo_usuario'] == 2) {
                    if ($_SESSION['nome_usuario'] != $chamados_final[0]) {
                        continue;
                    }
                }

                if (count($chamados_final) < 4) {
                    continue;
                }


                echo '
                        <div id="chamado">
                        <p style="text-align:center; font-size:2em;color:darkcyan;">' . $chamados_final[0] . '</p><br>
                        <h3 style="color:black;">E-mail: ' . '<span style="color:darkcyan;">'.$chamados_final[1].'</span>' . '</h3><br>
                        <h3 style="text-align:justify; font-size:1.2em;color:black;">Área: ' . '<span style="color:darkcyan;">'.$chamados_final[3].'</span>' . '</h3><br>
                        <h3 style="text-align:justify; font-size:1.2em;color:black;">Problema: ' . '<span style="color:darkcyan;">'.$chamados_final[2].'</span>'. '</h3><br>
                        <h3 style="text-align:justify; font-size:1.2em;color:black;">Descrição: ' . '<span style="color:darkcyan;">'.$chamados_final[4].'</span>' . '</h3><br>   
                        </div>               
                ';
            }
            ?>

        </div>

    </div>

</body>

</html>