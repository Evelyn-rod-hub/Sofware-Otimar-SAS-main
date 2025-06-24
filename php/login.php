<?php
require_once('db.php');
session_start();

header('Content-Type: application/json'); // Indica que responderás JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario = :usuario");
    $stmt->execute(['usuario' => $usuario]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $user['password'])) {
            $_SESSION['usuario'] = $usuario;
            setcookie("usuario", $usuario, time() + 3600, "/"); // cookie válida en todo el sitio

            echo json_encode(['success' => true]);
            exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Contraseña incorrecta.']);
            exit;
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuario no encontrado.']);
        exit;
    }
}

echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
exit;
?>
