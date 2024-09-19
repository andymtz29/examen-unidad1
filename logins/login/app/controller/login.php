<?php
session_start();
//pregunta si existe la variable usuario para mandarte a donde estas sin que regrese a registro
if (isset($_SESSION['usuario'])) {
    header("location:index.php");
    exit();
}

if ($_POST) {
    //valida que el input email y pass tengan contenido
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {

        $email = $_POST['email'];
        $pass = $_POST['contraseña'];
        
        if (empty($_SESSION['registro'])) {
            //validan que si existe la variable registro
            echo "<script>alert('Contraseña o correo incorrectos');</script>";
        } else {
            if ($email == $_SESSION['registro']['producto'] && $pass == $_SESSION['registro']['precio']) {
                //valida si el email y el password son correctos
                $_SESSION['usuario'] = $_SESSION['registro'];
                header("location: ./index.php");
            } else {
                echo "<script>alert('Contraseña o correo incorrectos');</script>";
            }
        }
    } else {
        echo "<script>alert('No puedes dejar campos vacios');</script>";
    }
}

?> 