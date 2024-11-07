<?php

class AuthController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Login'];
        if (isset($_SERVER['HTTP_REFERER'])) {
            $_SESSION['redirect_url'] = $_SERVER['HTTP_REFERER'];
        }
        $this->view('templats/header', $data);
        $this->view('auth/login');
        $this->view('templats/footer');
    }

    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));

            if (empty($username) || empty($password)) {
                $data = ['title' => 'Login', 'error' => 'Please fill out all fields.'];
                return $this->renderLoginView($data);
            }

            $userModel = $this->model('user\UserModels');
            $user = $userModel->findUserByUsername($username);

            if ($user && $this->verifyPassword($password, $user['password_hash'], $user['salt'])) {
                session_start();
                session_regenerate_id(true);  // Prevent session fixation attacks
                $_SESSION['user'] = $user['username'];
                header("Location:". BASE_URL . "/dashboard");  // Redirect after login
                exit;
            } else {
                $data = ['title' => 'Login', 'error' => 'Invalid username or password.'];
                return $this->renderLoginView($data);
            }
        } else {
            header("Location: /login");
            exit;
        }
    }

    private function renderLoginView($data)
    {
        $this->view('templats/header', $data);
        $this->view('auth/login', $data);
        $this->view('templats/footer');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));
            $email = htmlspecialchars(trim($_POST['email']));
            $firstName = htmlspecialchars(trim($_POST['first_name']));
            $lastName = htmlspecialchars(trim($_POST['last_name']));

            if (empty($username) || empty($password) || empty($email) || empty($firstName) || empty($lastName)) {
                $data = ['title' => 'Register', 'error' => 'All fields are required.'];
                return $this->renderRegisterView($data);
            }

            $salt = bin2hex(random_bytes(8));
            $password_hash = hash('sha256', $password . $salt);

            $userModel = $this->model('user\UserModels');
            $userModel->setUsername($username);
            $userModel->setSalt($salt);
            $userModel->setPassword($password_hash);
            $userModel->setEmail($email);
            $userModel->setFirstName($firstName);
            $userModel->setLastName($lastName);

            if ($userModel->save()) {
                header("Location: /login?registered=success");
                exit;
            } else {
                $data = ['title' => 'Register', 'error' => 'Registration failed. Please try again.'];
                return $this->renderRegisterView($data);
            }
        }

        $data = ['title' => 'Register'];
        $this->renderRegisterView($data);
    }

    private function renderRegisterView($data)
    {
        $this->view('templats/header', $data);
        $this->view('auth/register', $data);
        $this->view('templats/footer');
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /login");
        exit;
    }

    private function verifyPassword($password, $hash, $salt)
    {
        return hash('sha256', $password . $salt) === $hash;
    }
}
