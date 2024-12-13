<?php
/**
 * Red social que imita a instagram
 * 
 * @author Fran Paredes
 * @version 1.0
 */

require_once($_SERVER['DOCUMENT_ROOT'].'/red-social/redSocial/includes/session.inc.php');


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/red-social/redSocial/CSS/style.css">
    <title>Inicio</title>
</head>
<div class="content">
    <body>
        <?php
        if (!isset($_SESSION['user'])) {
            
            header('Location: pages/login.php?login=signup&userState=new');
        }

        require_once($_SERVER['DOCUMENT_ROOT'].'/red-social/redSocial/includes/header.inc.php');
        ?>
        <div class="user-table">
            
        </div>




        <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/red-social/redSocial/includes/footer.inc.php');
        ?>
    </body>
</div>
</html>