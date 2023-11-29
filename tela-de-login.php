<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./assets/icon.svg" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Helvetica, sans-serif;
            background-color: #a0ff99;
            background: linear-gradient(to bottom, rgb(20, 147, 220), rgb(17, 54, 71)) no-repeat;
            background-size: contain;
            height: 100vh;




        }

        h1 {
            text-align: center;
            margin-top: -10px;
            padding: 10px;
        }

        .container {
            display: grid;
            place-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .tela-login {
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            padding: 60px;
            border-radius: 20px;
            color: white;


        }

        input {
            border: none;
            padding: 15px;
            outline: none;
        }

        input+input {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: dodgerblue;
            border: none;
            padding: 10px;
            border-radius: 10px;
            transition: 0.6s;

        }

        input[type="submit"]:hover {
            background-color: #fff;
            cursor: pointer;

        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div class="container">

        <div class="tela-login">
            <form action="testLogin.php" method="POST">

                <h1>Login</h1>
                <input type="text" name="email" placeholder="Digite seu email...">
                <input type="password" name="senha" placeholder="Digite sua senha...">
                <input type="submit" value="LOGAR" name='submit'>

            </form>
        </div>

    </div>
</body>

</html>