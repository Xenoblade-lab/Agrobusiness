<?php
namespace Controllers;

class AuthController extends Controller {
    public function login(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_name'] = $user['nom'];
                header('Location: /dashboard');
                exit;
            } else {
                $error = 'Email ou mot de passe incorrect';
            }
        }
        $this->view('citoyen/login', ['error' => $error ?? '']);
    }

    public function register(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
            $telephone = $_POST['telephone'] ?? '';
            $role = $_POST['role'] ?? 'apprenant';

            $stmt = $this->pdo->prepare("INSERT INTO users (nom, email, password, telephone, role) VALUES (?, ?, ?, ?, ?)");
            if ($stmt->execute([$nom, $email, $password, $telephone, $role])) {
                header('Location: /login');
                exit;
            } else {
                $error = 'Erreur lors de l\'inscription';
            }
        }
        $this->view('citoyen/register', ['error' => $error ?? '']);
    }

    public function logout(): void {
        session_destroy();
        header('Location: /login');
        exit;
    }
}
