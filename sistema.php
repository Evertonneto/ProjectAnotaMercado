<?php
session_start();

//verificação login
if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION['senha']) == true)) {
    header('Location: tela-de-login.php');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}

include_once('config.php');

$logado = $_SESSION['email'];

$user_id = $_SESSION['user_id'];

$sql = "SELECT id,nome_produto,preco FROM produtos WHERE usuario_id = $user_id";

$result = $conexao->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome_produto"]) && isset($_POST["preco"])) {
        $nome_produto = $_POST["nome_produto"];
        $preco = $_POST["preco"];

        // Insere os dados do novo produto no banco de dados
        $sql_insert = "INSERT INTO produtos (usuario_id, nome_produto, preco) VALUES ($user_id, '$nome_produto', $preco)";
        $conexao->query($sql_insert);

        header('Location: sistema.php');
        exit();
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anota Mercado! - HOME</title>
    <link rel="shortcut icon" href="./assets/icon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap');

        body {
            font-family: Helvetica, sans-serif;
            background-color: #a0ff99;
            background: linear-gradient(to bottom, rgb(20, 147, 220), rgb(17, 54, 71)) no-repeat;
            background-size: contain;
            min-height: 100vh;
            color: white;
        }

        a {
            font-family: 'Pacifico', cursive;
            ;
        }

        h1 {
            padding: 20px;
            text-align: center;
        }
    </style>

</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Anota Mercado!</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger m-2">Sair</a>
        </div>

    </nav>

    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>"

        ?>

    <table class="table table-striped w-50 m-auto ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td> " . $count . "</td>";
                echo "<td>" . $user_data["nome_produto"] . "</td>";
                echo "<td>R$" . $user_data["preco"] . "</td>";
                echo "<td>
                    <a class='btn btn-primary btn-sm' href='edit.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
                            <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001'/>
                         </svg>
                    </a>
                </td>";
                echo "</tr>";
                $count++;

            }


            ?>

        </tbody>
    </table>


    <form method="POST" class="w-25 m-auto mt-4">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Nome do produto</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="nome_produto">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Preço</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="preco">
        </div>
        <button type="submit" class="btn btn-success w-100">Enviar</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>