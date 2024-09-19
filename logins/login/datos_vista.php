<?php 
require_once "./app/config/dependencias.php";
require_once "./app/controller/registro.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p><?=$nombre?></p>
                <p><?=$apellido?></p>
                <p><?=$telefono?></p>
                <div>
                    <a href="index.php" class="btn btn-warning mt-3 w-100 fs-4 fw-bold fs-4 text-white" id="regresar">regresar</a>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </form>
</body>
</html>