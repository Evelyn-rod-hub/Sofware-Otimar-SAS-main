<!-- Por favor copiar y pegar esta plantilla al crear una nueva pagina que necesite el nav, contiene todos los recursos que usamos-->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- metas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- titulo -->
    <title>Otimar S.A.S</title>
    <!--- Icono --->
    <link rel="icon" type="image/jpg" href="/Sofware-Otimar-SAS-main/Img/favicon.jpg" />
    <!-- Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="/Sofware-Otimar-SAS-main/css/">
    <link rel="stylesheet" href="/Sofware-Otimar-SAS-main/css/footer.css">
</head>

<body>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/Sofware-Otimar-SAS-main/includes/nav.php'); ?>


    <p>Aqui va el contenido </p>


    <footer>
        <h1>Otimar SAS</h1>
        <p>Todos los derechos reservados © 2024</p>
        <p>
        <ul>
            <li>Elaborado por:</li>
            <li>Evelyn Mercedes Rodríguez Ariza</li>
            <li>Diana Carolina Cuellar Rodríguez</li>
        </ul>
        </p>
    </footer>


    <!---- Scripts y jquery-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/Sofware-Otimar-SAS-main/js/"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>