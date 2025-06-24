<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['usuario'])) {
    echo json_encode(['status' => 'error', 'message' => 'No has iniciado sesión.']);
    exit;
}

$usuario = $_SESSION['usuario'];
$newPassword = $_POST['newPassword'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

if (empty($newPassword) || strlen($newPassword) < 6) {
    echo json_encode(['status' => 'error', 'message' => 'La contraseña debe tener al menos 6 caracteres.']);
    exit;
}

if ($newPassword !== $confirmPassword) {
    echo json_encode(['status' => 'error', 'message' => 'Las contraseñas no coinciden.']);
    exit;
}

$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("UPDATE users SET password = :password, updated_at = CURRENT_TIMESTAMP WHERE usuario = :usuario");
    $stmt->execute([
        ':password' => $hashedPassword,
        ':usuario' => $usuario
    ]);

    echo json_encode(['status' => 'success', 'message' => 'Contraseña actualizada correctamente.']);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error en la actualización: ' . $e->getMessage()]);
}
?>
