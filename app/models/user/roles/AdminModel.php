<?php
class AdminModel extends UserModels {
    public function __construct($username, $password, $email, $first_name, $last_name) {
        parent::__construct($username, $password, $email, $first_name, $last_name);
        $this->role = 'admin';
    }

    // Admin specific methods
    public function canManageUsers() {
        return true;
    }
}