<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    try {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $password === $user['password']) {
            $_SESSION['authenticated'] = true;
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.html');
            exit();
        } else {
            header('Location: index.html?error=invalid_credentials');
            exit();
        }
    } catch (PDOException $e) {
        error_log("Login error: " . $e->getMessage());
        header('Location: index.html?error=database_error');
        exit();
    }
} else {
    header('Location: index.html');
    exit();
}
?>