<?php
/**
 * Página de inicio de sesión
 * 
 * @author Fran Paredes
 * @version 0.1
 */
include_once($_SERVER['DOCUMENT_ROOT'].'/red-social/redSocial/includes/session.inc.php');


if (!empty($_GET)){
    if ($_GET['login'] == 'createAccount') {
        $hola = 'adios2';
    }
    if ($_GET['login'] != 'createAccount') {
        $hola = 'adios';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/red-social/redSocial/CSS/style.css">
    <title>Login</title>
</head>
<div class="content">
    <body>
        <header></header>
        <?php
        if (isset($_GET['login']) && $_GET['login'] == 'signup' && $_GET['userState'] == 'new') {
            if ($_GET['userState'] == 'new' && $_POST['userState'] == 'new') {
                echo 'hola';
            } else {
                echo '<div class="welcome">
                Bienvenido
                </div>';
            }
        } else if (isset($_GET['login']) && $_GET['login'] == 'signup' && $_GET['userState'] == 'old'){
            echo 'adios 2';
        }
        ?>
        <div class="login">
            <div class="form">
                <a href="/red-social/redSocial/index.php"><img src="/red-social/redSocial/images/logo.avif" alt="logo" height="50px"></a>
                <br><br>
                <form action="#" method="POST">
                    <input type="hidden" name="userState" id="userState" value="<?=$_GET['userState'] ?? 'old'?>">
                    <label for="user">Usuario o Correo electrónico:</label>
                    <br>
                    <input type="text" id="user" value="<?=$_POST['user'] ?? ''?>">
                    <br><br>
                    <label for="Password">Contraseña:</label>
                    <br>
                    <input type="text" id="Password" value="<?=$_POST['password'] ?? ''?>">
                    <br><br>
                    <?php
                    if (empty($_GET['login'])) {
                        echo '<label for="">---------------------------------</label>
                        <br><br>
                        <a href=""><label for="PasswordForget">¿Olvidaste tu contraseña?</label></a>
                        <br><br>
                        <input class="button" type="submit" value="Iniciar sesión">';
                    } else if ($_GET['login'] == 'signup') {
                        echo '<input class="button" type="submit" value="Crear cuenta">';
                    }
                    ?>
                </form>
            </div>
            <br>
            <?php
            if (empty($_GET['login'])) {
                echo '<div class="form">
                <p>¿No tienes una cuenta? <a href="login.php?login=signup">Regístrate</a></p>
                </div>';
            }
            ?>
        </div>

        <?php
        include_once($_SERVER['DOCUMENT_ROOT'].'/red-social/redSocial/includes/footer.inc.php');
        ?>
    </body>
</div>
</html>