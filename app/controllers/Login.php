<?php

class Login extends Controller
{
    public function index()
    {
        $data = ['title' => 'Login'];
        $this->view('templats/header', $data);
        $this->view('auth/login');
        $this->view('templats/footer');
    }
}
