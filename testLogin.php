<?php
// session_start();


// if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

//     include_once('config.php');


//     $email = $_POST['email'];
//     $senha = $_POST['senha'];


//     $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'");
//     $stmt->bind_param("ss", $email, $senha);
//     $stmt->execute();
//     $stmt->bind_result($user_id);
//     $stmt->fetch();
//     $stmt->close();

//     print_r($email);
//     print_r('<br>');
//     print_r($senha);

//     $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

//     $result = $conexao->query($sql);

//     print_r($result);

//     if (mysqli_num_rows($result) < 1) {
//         unset($_SESSION['email']);
//         unset($_SESSION['senha']);
//         header('Location: tela-de-login.php');
//     } else {
//         $_SESSION['user_id'] = $user_id;
//         $_SESSION['email'] = $email;
//         $_SESSION['senha'] = $senha;
//         header('Location: sistema.php');
//     }


// } else {
//     header('Location: tela-de-login.php ');
// }


session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    include_once('config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Use uma instrução preparada para evitar SQL injection
    $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'");
    //$stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();

    if (!$user_id) {
        unset($_SESSION['user_id']);
        header('Location: tela-de-login.php');
    } else {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
} else {
    header('Location: tela-de-login.php');
}


?>