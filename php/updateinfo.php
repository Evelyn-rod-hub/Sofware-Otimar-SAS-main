<?php
session_start();
require_once 'db.php'; // Ajusta esta ruta si tu conexión está en otro lugar

// Verifica si hay sesión
$usuario = $_SESSION['usuario'] ?? null;

if (!$usuario) {
    echo json_encode(['status' => 'error', 'message' => 'Usuario no autenticado.']);
    exit;
}

// Asegúrate de que sea una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correoElectronico'] ?? '';
    $numero = $_POST['phoneNumberInput'] ?? '';
    $codigo = $_POST['codigoPais'] ?? '';

    // Validar correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Correo electrónico no válido.']);
        exit;
    }

    // Validar número
    if (!preg_match('/^[0-9]{7,15}$/', $numero)) {
        echo json_encode(['status' => 'error', 'message' => 'Número de teléfono inválido.']);
        exit;
    }

    // Construir número final con código de país
    $celular = $codigo . $numero;

    try {
        $stmt = $pdo->prepare("UPDATE users SET email = :email, celular = :celular, updated_at = CURRENT_TIMESTAMP WHERE usuario = :usuario");
        $stmt->execute([
            ':email' => $correo,
            ':celular' => $celular,
            ':usuario' => $usuario
        ]);

        echo json_encode(['status' => 'success', 'message' => 'Datos actualizados correctamente.']);
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
}
