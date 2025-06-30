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
    <link rel="stylesheet" href="css/styleprincipal.css">
</head>

<body>

    <?php include 'includes/nav.php'; ?>


    <!--Vuelos a Tarapacá,Reserva tu vuelo-->
    <div class="col s12 z-depth-2">
        <div class="card horizontal teal darken-2">
            <div class="card-image">
                <h6>
                    <img class="responsive-img"
                        src="https://www.invias.gov.co/images/Photos/2021/261021_tarapaca_03.jpg" alt="">
                </h6>
            </div>
            <div class="card-stacked"></div>
            <div class="card-content white-text">
                <span class="card-title" size="4">Otimar SAS tus alas confiables en el Amazonas</span>
                <h6 class="section">
                    </br>
                    <p>
                        <font size="4">
                            Conectamos Leticia con destinos mágicos como Tarapacá, La Pedrera y La Chorrera. Ya sea para explorar la selva virgen y sus culturas, admirar paisajes fluviales o descubrir secretos ancestrales, te llevamos con vuelos chárter seguros y eficientes, transportando tanto a
                            pasajeros como la carga vital que impulsa la región. ¡Somos tu aventura y logística a solo un clic de distancia!
                        </font>
                    </p>
                </h6> </br>
                <div class="card-action mx-0">
                    <a href="pages/FormReservaVuelo.php">Reserva tu vuelo</a>
                </div>
            </div>
        </div>

        <!--Destino Tarapaca-->
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="Img/tarapaca2.jpg" alt="" width="228px" height="250px">
                        <span class="card-title">Tarapacá Amazonas</span>
                    </div>
                    <div class="card-content">
                        <p>Imagine un lugar donde el verde esmeralda de la selva se extiende hasta donde alcanza la vista, donde el canto de las
                        aves y el sonido del río Putumayo son la banda sonora de su viaje. Tarapacá está rodeado de selva amazónica, lo que lo
                        convierte en un paraíso natural sin precedentes, el lugar ideal para realizar actividades como senderismo, observación
                        de aves y pesca, es un paraíso natural sin precedentes, donde podrá conectar con la naturaleza en su estado más puro y
                        descubrir la asombrosa biodiversidad que alberga la selva amazónica.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Destino Tarapacá</a>
                    </div>
                </div>
            </div>

            <!--Destino La Chorrera-->
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="Img/La Chorrera Amazonas Colombia.jpg" alt="" width="238px"
                            height="250" alt="">
                        <span class="card-title">La Chorrera Amazonas</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Destino La Chorrera</a>
                    </div>
                </div>
            </div>

            <!--Destino La Pedrera-->
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="Img/La Pedrera.jpg" alt="" width="228px" height="250" alt=""
                            srcset="">
                        <span class="card-title">La Pedrera Amazonas</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Destino La Pedrera</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Requisitos para menores-->
        <div class="row">
            <div class="col s12 m4 orange accent-2 white-text text center-align z-depth-2">
                <h4>
                    <p>
                        <font size="6">Requisitos para menores</font>
                    </p>
                </h4>
            </div>

            <!--Requisitos de Viaje-->
            <div class="container col s12 m4 orange accent-2 white-text text center-align z-depth-2">
                <h4>
                    <p>
                        <font size="6">Requisitos de Viaje</font>
                    </p>
                </h4>
            </div>

            <!--Políticas de equipaje-->
            <div class="container col s12 m4 orange accent-2 white-text text center-align z-depth-2">
                <h4>
                    <p>
                        <font size="6">Políticas de equipaje</font>
                    </p>
                </h4>
            </div>

        </div>

    </div>

    <footer>
        <h1>Otimar SAS</h1>
        <P>Todos los derechos reservados © 2024</P>
        <p>
        <ul>
            <li>Elaborado por:</li>
            <li>Evelyn Mercedes Rodríguez Ariza</li>
            <li>Diana Carolina Cuellar Rodríguez</li>
        </ul>
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>