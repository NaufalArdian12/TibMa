<?php

class Controller
{
    protected $conn;

    public function __construct()
    {
        // Inisialisasi koneksi database
        $config = new Config();
        $this->conn = $config->connect();
    }

    // Metode untuk memuat view
    public function view($view, $data = [])
    {
        $file = "../app/views/$view.php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            die("View $view tidak ditemukan.");
        }
    }

    // Metode untuk memuat model
    public function model($model)
{
    // Replace forward slashes with directory separator for cross-platform compatibility
    $modelPath = str_replace('/', DIRECTORY_SEPARATOR, $model);
    
    // Construct the full file path
    $file = "../app/models/{$modelPath}.php";
    
    // Check if file exists
    if (file_exists($file)) {
        require_once $file;
        
        // Get only the class name without the path
        $className = basename(str_replace('/', '\\', $model));
        
        // Inisialisasi model dengan koneksi database
        return new $className($this->conn);
    } else {
        die("Model $model tidak ditemukan di lokasi: $file");
    }
}
}
