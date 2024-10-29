<?php
class AuthController {
    public function login() {
        if ($_POST) {
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$_POST['email']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: /products');
            } else {
                echo "Credenciais inválidas!";
            }
        }
        include '../app/views/auth/login.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /');
    }
}
?>
