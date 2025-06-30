<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva tu Vuelo - Datos del Pasajero</title>
    <link rel="stylesheet" href="../css/styleformreservavuelo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="main-header-wrapper">
    
        <div class="logo">
            <img class="logo" src="../Img/logo_otimar.png" alt="">
        </div>
        
    </header>

    <div class="form-container">
        <h1>Reserva tu vuelo</h1>
        <h2>Datos del Pasajero</h2>

        <form id="passengerDataForm">
            <div class="form-row">
                <div class="form-group">
                    <label for="tipoDocumento">Tipo documento <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <select id="tipoDocumento">
                            <option value="">Tipo documento</option>
                            <option value="">Cédula</option>
                            <option value="">Tarjeta de identidad</option>
                            <option value="">Registro Civil</option>
                            <option value="">Cédula de extranjería</option>
                            <option value="">Pasaporte</option>
                            <option value="">PPT</option>
                            <option value="">DNI</option>
                            <option value="">CPF</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numeroDocumento">Número documento <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="text" id="numeroDocumento" placeholder="Número documento">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nombres">Nombres <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="text" id="nombres" placeholder="Nombres">
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="text" id="apellidos" placeholder="Apellidos">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="text" id="nacionalidad" placeholder="Nacionalidad">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="date" id="fechaNacimiento" placeholder="DD/MM/AAAA">
                        <i class="fas fa-calendar-alt calendar-icon"></i>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="pesoCorporal">Peso corporal en kilogramos <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="text" id="pesoCorporal" placeholder="Peso corporal">
                    </div>
                </div>
                <div class="form-group">
                    <label for="celular">Celular <span class="required-asterisk">*</span></label>
                    <div class="phone-input-group">
                        <select id="phoneCountryCodeSelect">
                            <option value="+57" data-country-code="co">+57</option>
                            <option value="+55" data-country-code="br">+55</option>
                            <option value="+51" data-country-code="pe">+51</option>
                        </select>
                        <img id="countryFlag" src="https://flagcdn.com/w20/co.png" alt="Bandera de Colombia">
                        <input type="tel" id="celular" placeholder="Celular">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <div class="input-field-group">
                        <input type="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group"></div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="fechaIda">Fecha de ida <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="date" id="fechaIda" placeholder="DD/MM/AAAA">
                        <i class="fas fa-calendar-alt calendar-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fechaRegreso">Fecha de regreso <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <input type="date" id="fechaRegreso" placeholder="DD/MM/AAAA">
                        <i class="fas fa-calendar-alt calendar-icon"></i>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="ruta">Ruta <span class="required-asterisk">*</span></label>
                    <div class="input-field-group">
                        <select id="ruta">
                            <option value="">Ruta</option>
                            <option value="let-trap">Leticia - Tarapacá</option>
                            <option value="trap-let">Tarapacá - Leticia</option>
                            <option value="let-lpd">Leticia - La Pedrera</option>
                            <option value="lpd-let">La Pedrera - Leticia</option>
                            <option value="let-lch">Leticia - La Chorera</option>
                            <option value="lch-let">La Chorera - Leticia</option>
                            <option value="bog-let">Bogotá - Leticia</option>
                            <option value="let-bog">Leticia - Bogotá</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="totalReserva">Total de tu reserva :</label>
                    <div class="input-field-group">
                        <input type="text" id="totalReserva" value="$ 0.00" readonly>
                    </div>
                </div>
            </div>

            <div class="form-footer">
                <label>
                    <input type="checkbox" id="aceptoPoliticas">
                    Acepto <a href="#">políticas de equipaje</a>, <a href="#">términos de servicio</a> y <a
                        href="#">políticas de privacidad</a>
                </label>
            </div>

            <div class="button-group">
                <button type="submit" class="button primary-green">Continuar y pagar</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const phoneCountryCodeSelect = document.getElementById('phoneCountryCodeSelect');
            const countryFlagImg = document.getElementById('countryFlag');

            function updateFlag() {
                const selectedOption = phoneCountryCodeSelect.options[phoneCountryCodeSelect.selectedIndex];
                const countryCode = selectedOption.getAttribute('data-country-code');

                if (countryCode) {
                    countryFlagImg.src = `https://flagcdn.com/w20/${countryCode}.png`;
                    // Extraer solo el código de país del texto de la opción para el alt (ej. "+57")
                    const phoneCode = selectedOption.textContent.split(' ')[0];
                    countryFlagImg.alt = `Bandera para el código ${phoneCode}`;
                } else {
                    countryFlagImg.src = ""; // O una URL de una bandera por defecto/vacía
                    countryFlagImg.alt = "Bandera del país";
                }
            }

            // Llamada inicial para establecer la bandera por defecto
            updateFlag();

            // Event listener para cambiar la bandera cuando se selecciona una opción diferente
            phoneCountryCodeSelect.addEventListener('change', updateFlag);

            // Nota: Aquí se integrarían las validaciones si fueran necesarias para esta página.
            // Por ahora, solo se construye la estructura visual.
            // Si quieres la validación en tiempo real para estos campos, tendrías que adaptar
            // el script de validación que se construyó para la página de perfil.
        });
    </script>
</body>

</html>