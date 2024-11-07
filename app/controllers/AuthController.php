<?php

class AuthController extends Controller
{
    public function index()
    {
        // Tampilkan halaman login
        $data = ['title' => 'Login'];
        $this->view('templats/header', $data);
        $this->view('auth/login');
        $this->view('templats/footer');
    }

    public function authenticate()
    {
        // Pastikan metode permintaan adalah POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Ambil data input dari form login
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Muat model user untuk verifikasi
            $userModel = $this->model('user\UserModels');
            $user = $userModel->findUserByUsername($username);
            $authenticated = $userModel->verifyPassword($username, $password);
            var_dump($authenticated);
            // Periksa apakah user ditemukan dan password valid
            if ($authenticated) {
                // Jika valid, simpan session dan tampilkan pesan login berhasil
                session_start();
                $_SESSION['user'] = $user['username'];
                echo "Login berhasil! Selamat datang, " . $_SESSION['user'];
            } else {
                // Jika tidak valid, tampilkan pesan error
                $data = ['title' => 'Login', 'error' => 'Username atau password salah.'];
                $this->view('templats/header', $data);
                $this->view('auth/login', $data);
                $this->view('templats/footer');
            }
        } else {
            // Jika metode bukan POST, alihkan ke halaman login
            header("Location: /login");
            exit;
        }
    }


    function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $salt = bin2hex(random_bytes(8));
            $password_hash = hash('sha256', $_POST['password'] . $salt);
            $userModel = $this->model('user\UserModels');
            $userModel->setUsername($_POST['username']);
            $userModel->setSalt($salt);
            $userModel->setPassword($password_hash);
            $userModel->setEmail($_POST['email']);
            $userModel->setFirstName($_POST['first_name']);
            $userModel->setLastName($_POST['last_name']);
            $userModel->save();
        }
        $data = ['title' => 'Register'];

        $this->view('templats/header', $data);
        $this->view('auth/register');
        $this->view('templats/footer');
    }

    public function logout()
    {
        // Hapus session dan alihkan ke halaman login
        session_start();
        session_unset();
        session_destroy();
        header("Location: /login");
        exit;
    }
}
