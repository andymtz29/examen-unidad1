<?php
require_once("./app/config/dependencias.php");
require_once("./app/controller/registro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=ICONS."bootstrap-icons.css";?>">
    <link rel="stylesheet" href="<?=CSS."registro_vista.css";?>">
    <title>Formulario de datos</title>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <form action="./registro_vista.php" method="post" class="w-25 p-4">
        <div class="text-center mb-4 c-user">
        <i class="bi bi-clipboard-data-fill"></i>
        </div>

        <h4>Bienvenido empecemos por registrar el producto</h4>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-person-fill fs-3 text-white mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese un producto" name="producto" value="<?= (!empty($_POST['producto'])) ? $_POST['producto'] : ''; ?>">
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-person-fill fs-3 text-white mx-1"></i>
            <input type="number" class="form-control" placeholder="Ingrese un precio" name="precio" value="<?= (!empty($_POST['precio'])) ? $_POST['precio'] : ''; ?>">
        </div>

        <div class="mt-3 c-button">
            <button type="submit" class="btn w-100 text-white fs-4">Registrar producto</button> 
        </div>

        <div class="mt-3 c-button">
            <button type="submit" class="btn w-100 text-white fs-4">Lista de productos</button> 
        </div>
        
        <h7>Si desea ver la lista de click en el siguiente boton</h7>
    </form>
</body>
</html>