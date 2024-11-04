
<?php
class Config {
  private $host;
  private $database_name;
  private $username;
  private $password;
  public $conn;

  public function __construct() {
    $this->host = "localhost";
    $this->database_name = "tatatertib";
    $this->username = "root";
    $this->password = "";
  }

  public function connect() {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
      echo "Connection error: " . $exception->getMessage();
    }

    return $this->conn;
  }
}
