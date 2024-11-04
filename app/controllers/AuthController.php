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

            // Periksa apakah user ditemukan dan password valid
            if ($user && $userModel->verifyPassword($username, $password)) {
                // Jika valid, simpan session dan tampilkan pesan login berhasil
                session_start();
                $_SESSION['user'] = $user['username'];
                echo "Login berhasil! Selamat datang, " . $_SESSION['user'];
                exit;
            } else {
                // Jika tidak valid, tampilkan pesan error
                $data = ['title' => 'Login', 'error' => 'Username atau password salah.'];
                $this->view('templates/header', $data);
                $this->view('auth/login', $data);
                $this->view('templates/footer');
            }
            
        } else {
            // Jika metode bukan POST, alihkan ke halaman login
            header("Location: /login");
            exit;
        }
    }


    function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $salt = bin2hex(random_bytes(16));
            $password_hash = hash('sha256', $_POST['password'] . $salt);
            $userModel = $this->model('user\UserModels');
            $userModel->username = $_POST['username'];
            $userModel->salt = $salt;
            $userModel->password_hash = $password_hash;
            $userModel->email = $_POST['email'];
            $userModel->first_name = $_POST['first_name'];
            $userModel->last_name = $_POST['last_name'];
            $userModel->save();
            echo "$userModel ditemukan dan diinisialisasi";
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
