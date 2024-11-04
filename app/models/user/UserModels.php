<?php
class UserModels {
    protected $conn; // Koneksi database
    protected $id_user;
    protected $username;
    protected $salt;
    protected $password_hash;
    protected $email;
    protected $role;
    protected $image_path;
    protected $address;
    protected $phone_number;
    protected $first_name;
    protected $last_name;

    public function __construct($conn, $username = null, $password = null, $email = null, $first_name = null, $last_name = null) {
        echo "UserModels ditemukan dan diinisialisasi";
        $this->conn = $conn; // Set koneksi database
        $this->username = $username;
        $this->salt = $this->generateSalt();
        $this->password_hash = $password ? $this->hashPassword($password, $this->salt) : null;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // Generate random salt
    private function generateSalt($length = 32) {
        return bin2hex(random_bytes($length));
    }

    // Hash password with salt
    private function hashPassword($password, $salt) {
        return hash('sha256', $password . $salt);
    }

    // Menyimpan user baru ke database
    public function save() {
        $query = "INSERT INTO users (username, salt, password_hash, email, first_name, last_name) VALUES (:username, :salt, :password_hash, :email, :first_name, :last_name)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':salt', $this->salt);
        $stmt->bindParam(':password_hash', $this->password_hash);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':first_name', $this->first_name);
        $stmt->bindParam(':last_name', $this->last_name);

        return $stmt->execute();
    }

    // Mengambil data user berdasarkan username
    public function findUserByUsername($username) {
        $query = "SELECT * FROM tb_user WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Verifikasi password user
    public function verifyPassword($username, $password) {
        $user = $this->findUserByUsername($username);
        
        if ($user) {
            $hash = $this->hashPassword($password, $user['salt']);
            return hash_equals($user['password_hash'], $hash);
        }
        
        return false;
    }

    // Getter methods untuk data user
    public function getId() {
        return $this->id_user;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function getImagePath() {
        return $this->image_path;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    // Update password
    public function changePassword($new_password) {
        $this->salt = $this->generateSalt();
        $this->password_hash = $this->hashPassword($new_password, $this->salt);

        $query = "UPDATE users SET salt = :salt, password_hash = :password_hash WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':salt', $this->salt);
        $stmt->bindParam(':password_hash', $this->password_hash);
        $stmt->bindParam(':username', $this->username);

        return $stmt->execute();
    }
}
