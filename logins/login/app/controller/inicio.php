<?php
//lo agrega y valida que realmente exista el usuario
if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
}

?>