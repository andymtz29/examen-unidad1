<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location:index.php");
}

if ($_POST) {
    //comprueba que los datos esten llenos en los inputs
    if (isset($_POST['producto']) && !empty($_POST['producto']) && 
        isset($_POST['precio']) && !empty($_POST['precio'])) 
        {
        
        //agrega los datos de los inputs a la variable de sesion
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
    
        $_SESSION['registro'] = [
            "producto" => $producto,
            "precio" => $precio,

        ];
        //redirecciona al login
        header('location:./login.php');
    } else {
        echo "<script>alert('Te falta llenar los datos');</script>";
    }
}

?>