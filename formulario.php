<?php

if (isset($_POST["submit"])) {
    include_once('config.php');

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $genero = $_POST["genero"];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    // Preparar a instrução SQL para inserção
    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco, senha) VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco','$senha')");

    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="shortcut icon" href="./assets/icon.svg" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));


        }

        .box {
            display: grid;
            place-content: center;
            height: 100vh;

        }

        .box form {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 20px;
            width: 500px
        }

        fieldset {
            border: 3px solid dodgerblue;
            padding: 10px;
        }

        fieldset .genero {
            color: white;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            color: white;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;

        }

        .inputBox {
            position: relative;
            color: white;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            background-color: white;
            color: black;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="inputUser" id="nome" name="nome" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha">Senha</label>
                    <input type="password" class="inputUser" id="senha" name="senha" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email">Email</label>
                    <input type="email" class="inputUser" id="email" name="email" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="inputUser" id="telefone" name="telefone" required>
                </div>
                <br><br>
                <div class="genero">

                    <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino">
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino">
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outro" value="outro">
                    <label for="outro">Outro</label>

                </div>


                <br><br>

                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de nascimento</b></label>
                    <input type="date" class="inputUser" id="data_nascimento" name="data_nascimento" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="cidade"><b>Cidade</b></label>
                    <input type="text" class="inputUser" id="cidade" name="cidade" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="estado"><b>Estado</b></label>
                    <input type="text" class="inputUser" id="estado" name="estado" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="endereco"><b>Endereço</b></label>
                    <input type="text" class="inputUser" id="endereco" name="endereco" required>
                </div>
                <br><br>
                <input type="submit" id="submit" name="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>