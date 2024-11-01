<?php

class Controller
{
    public function view($view, $data = [])
    {
        $file = "../app/views/$view.php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            die("View $view tidak ditemukan.");
        }
    }
}
