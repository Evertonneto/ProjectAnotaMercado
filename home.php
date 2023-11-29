<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anota mercado!</title>
    <link rel="shortcut icon" href="./assets/icon.svg" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, rgb(20, 147, 220), rgb(17, 54, 71)) no-repeat;
            text-align: center;
            height: 100vh;

        }

        h1 {

            font-family: 'Pacifico', cursive;
            color: white;
            padding: 10px;
            margin-top: 10px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            display: inline-block;
            background-color: #212121;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            padding: 10px;
            border-radius: 5px;

            transition: 0.5s ease-in-out;


        }

        a:hover {
            background-color: dodgerblue;
        }

        a+a {
            margin-left: 10px;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.65);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h1>Anota Mercado!</h1>

    <div class="box">
        <a href="tela-de-login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>