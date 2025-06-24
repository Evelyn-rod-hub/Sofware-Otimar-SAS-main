document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form[action*="updateinfo.php"]');

    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const correoInput = form.querySelector('[name="correoElectronico"]');
        const telefonoInput = form.querySelector('[name="phoneNumberInput"]');
        const codigoSelect = form.querySelector('[name="codigoPais"]');

        // Validación de existencia
        if (!correoInput || !telefonoInput || !codigoSelect) {
            alert('Faltan campos del formulario.');
            return;
        }

        const correo = correoInput.value.trim();
        const telefono = telefonoInput.value.trim();
        const codigo = codigoSelect.value.trim();

        let esValido = true;

        const correoRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
        if (!correoRegex.test(correo)) {
            alert('❌ Ingresa un correo electrónico válido.');
            esValido = false;
        }

        if (telefono.length < 10 || !/^[0-9]+$/.test(telefono)) {
            alert('❌ Ingresa un número de teléfono válido (mínimo 10 dígitos).');
            esValido = false;
        }

        if (!esValido) return;

        const formData = new FormData(form);
        formData.set('celular', codigo + telefono);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                alert('✅ Datos actualizados correctamente');
            } else {
                alert('❌ ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('❌ Error de red o del servidor');
        });
    });
});

//cmostrar u ocultar contraseña


document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.password-toggle').forEach(toggle => {
        toggle.addEventListener('click', () => {
            const input = toggle.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                toggle.textContent = '🙈'; // Ocultar
            } else {
                input.type = 'password';
                toggle.textContent = '👁'; // Mostrar
            }
        });

        // Asegura que el ícono inicial sea 👁 al cargar
        toggle.textContent = '👁';
    });
});


//Alerta de contraseñas no coinciden

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('changePasswordForm');

    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const pass1 = form.querySelector('[name="newPassword"]').value.trim();
        const pass2 = form.querySelector('[name="confirmPassword"]').value.trim();

        if (pass1.length < 6) {
            alert("❌ La contraseña debe tener al menos 6 caracteres.");
            return;
        }

        if (pass1 !== pass2) {
            alert("❌ Las contraseñas no coinciden.");
            return;
        }

        // Enviar con fetch
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                alert('✅ Contraseña actualizada correctamente.');
                form.reset(); // Limpiar campos
            } else {
                alert('❌ ' + (data.message || 'Hubo un error al actualizar.'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('❌ Error de red o del servidor.');
        });
    });
});


