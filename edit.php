<?php

include_once("config.php");

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
    <title>Anota Mercado - Editar Produto</title>
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

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>

<body>
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
</body>

</html>