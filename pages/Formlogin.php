<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- Icono --->
    <link rel="icon" type="image/jpg" href="/Sofware-Otimar-SAS-main/Img/favicon.jpg" />
    
    <title>Inicio</title>

    <link rel="stylesheet" href="../css/styleformularios.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <div class="container" id="container">
    
        <div class="form-content">
            <img class="logo" src="../Img/logo_otimar.png" alt="">
            <h1 id="title">Bienvenido</h1> <!-- Titulo formulario -->
            <h2 id="title">Ingrese usuario y contraseña</h2> <!-- Titulo formulario -->
            
            <!--action="validar.php" method="POST"-->
            <form method="POST" id="loginForm">
                <div class="input-group">

                    <!-- casilla usuario -->
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <label for="usuario"></label>
                        <input type="text" name="usuario" id="usuario" placeholder="usuario" required>
                    </div>

                    <!-- casilla contraseña -->
                    <div class="input-field" id="contraseñaDiv">
                        <i class="fa-solid fa-lock"></i>
                        <label for="password"></label>
                        <input type="password" name="password" id="password" placeholder="Contraseña" required>
                    </div>

                </div>

                <!-- botón iniciar sesión -->
                <div class="btn-field">
                    <button id="loginBtn" type="submit" name="login">Iniciar sesión</button>
                </div>

                <!-- preguntas finales -->
                <div class="forgotpwd">
                    <label>¿Olvidaste tu contraseña?</label> <a href="#">Click aquí</a>
                </div>
            </form>


           
    
        </div>
    </div>
    

    <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Evita el envío normal

        const usuario = document.getElementById('usuario').value;
        const password = document.getElementById('password').value;

        fetch('../php/login.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `usuario=${encodeURIComponent(usuario)}&password=${encodeURIComponent(password)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirigir al index si el login fue exitoso
                window.location.href = '../index.php';
            } else {
                // Mostrar error
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrió un error en el servidor.');
        });
    });
    </script>



    
</body>

</html>