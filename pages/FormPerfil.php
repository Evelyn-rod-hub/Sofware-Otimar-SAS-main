<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="../css/styleformperfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS se pegará aquí */
    </style>
</head>

<body>
    <div class="page-wrapper">
        <aside class="sidebar">
            <img class="logo" src="../Img/logo_otimar.png" alt="">
            <div class="sidebar-header">
                Mi Cuenta
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-user"></i>
                            <span>Mi perfil</span>
                            <i class="fas fa-chevron-right arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-plane"></i>
                            <span>Mis viajes</span>
                            <i class="fas fa-chevron-right arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-wallet"></i>
                            <span>Billetera virtual</span>
                            <i class="fas fa-chevron-right arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Cerrar sesión</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <div class="main-header">
                Mi perfil
            </div>

            <div class="profile-card">
                <h2>
                    <span class="avatar-initials">E</span>
                    Datos personales
                </h2>
                <?php
                require_once '../php/db.php'; 

                $usuario = $_SESSION['usuario'] ?? null;

                if (!$usuario) {
                    echo "Usuario no autenticado.";
                    exit;
                }

                $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :usuario");
                $stmt->execute([':usuario' => $usuario]);
                $datos = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nombre</label>
                        <div class="input-field-group">
                            <p><?php echo htmlspecialchars($datos['nombre'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Tipo de documento</label>
                        <div class="input-field-group">
                            <p><?php echo htmlspecialchars($datos['tipo_documento'] ?? ''); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Número de documento</label>
                        <div class="input-field-group">
                            <p><?php echo htmlspecialchars($datos['numero_doc'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <div class="input-field-group">
                            <p>
                                <?php
                                if (!empty($datos['fecha_nacimiento'])) {
                                    $fecha = date('d/m/Y', strtotime($datos['fecha_nacimiento']));
                                    echo $fecha;
                                } else {
                                    echo 'Sin registrar';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nacionalidad</label>
                        <div class="input-field-group">
                            <p><?php echo htmlspecialchars($datos['nacionalidad'] ?? ''); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Género</label>
                        <div class="input-field-group">
                            <p><?php echo htmlspecialchars($datos['genre'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>



                <form method="POST" action="../php/updateinfo.php">
                    <h3>Datos de contacto</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="correoElectronico">Correo Electrónico</label>
                            <div class="input-field-group" id="correoElectronico-group">
                                <input type="text" id="correoElectronico" name="correoElectronico" value="" placeholder="Escribe tu correo electrónico aquí">
                            </div>
                            <span class="error-message">Ingresa un correo electrónico válido.</span>
                        </div>
                        <div class="form-group">
                            <label for="phoneCountryCodeSelect">Teléfono</label>
                            <div class="phone-input-group" id="phoneNumberInput-group" >
                                <select id="phoneCountryCodeSelect" name="codigoPais">
                                    <option value="" data-country-code="co"></option>
                                    <option value="+57" data-country-code="co">+57</option>
                                    <option value="+55" data-country-code="br">+55</option>
                                    <option value="+51" data-country-code="pe">+51</option>
                                </select>
                                <img id="countryFlag" src="https://flagcdn.com/w20/co.png" alt="Bandera de Colombia">
                                <input type="tel" id="phoneNumberInput" placeholder="Número de teléfono aquí" name="phoneNumberInput">
                            </div>
                            <span class="error-message" id="phoneNumberInput-error" data-error-message="Ingresa un número de teléfono válido.">Ingresa un número de teléfono válido.</span>
                        </div>
                    </div>

                    <input type="hidden" name="fechaNacimiento" id="fechaNacimiento">
                    <input type="hidden" name="celular" id="celular">

                    <div class="button-group">
                        <button type="submit" class="button primary">Actualizar</button>
                    </div>
                </form>

                
            </div>

            <div class="profile-card">
                <h2>Cambiar Contraseña</h2>
                <form id="changePasswordForm" method="POST" action="/Sofware-Otimar-SAS-main/php/changePassword.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="newPassword">Contraseña nueva</label>
                            <div class="input-field-group">
                                <input type="password" id="newPassword" name="newPassword" placeholder="Ingresa tu contraseña nueva">
                                <span class="password-toggle">👁</span>
                            </div>
                            <span class="error-message" id="newPassword-error" data-error-message="La contraseña debe tener al menos 6 caracteres.">La contraseña debe tener al menos 6 caracteres.</span>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirmar contraseña nueva</label>
                            <div class="input-field-group">
                                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirma tu contraseña nueva">
                                <span class="password-toggle">👁</span>
                            </div>
                            <span class="error-message" id="confirmPassword-error" data-error-message="Las contraseñas no coinciden.">Las contraseñas no coinciden.</span>
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="button primary">Cambiar contraseña</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script src="/Sofware-Otimar-SAS-main/Js/formPerfil.js"></script>

    <script>
    //Cambia la bandera
    document.addEventListener('DOMContentLoaded', () => {
        const countrySelect = document.getElementById('phoneCountryCodeSelect');
        const flagImg = document.getElementById('countryFlag');

        function updateFlag() {
            const selectedOption = countrySelect.options[countrySelect.selectedIndex];
            const countryCode = selectedOption.getAttribute('data-country-code');

            if (countryCode) {
                flagImg.src = `https://flagcdn.com/w20/${countryCode}.png`;
                flagImg.alt = `Bandera de ${selectedOption.textContent}`;
            } else {
                // Valor vacío (Selecciona...), muestra imagen por defecto o limpia
                flagImg.src = "";
                flagImg.alt = "Bandera no seleccionada";
            }
        }

        // Actualizar bandera al cargar
        updateFlag();

        // Actualizar bandera al cambiar de país
        countrySelect.addEventListener('change', updateFlag);
    });
    </script>

</body>

</html>