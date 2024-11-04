<?php
class DosenModel extends userModels {
    private $nip;
    private $bidang_keahlian;
    private $jabatan;

    public function __construct($username, $password, $email, $first_name, $last_name, $nip, $bidang_keahlian, $jabatan) {
        parent::__construct($username, $password, $email, $first_name, $last_name);
        $this->role = 'dosen';
        $this->nip = $nip;
        $this->bidang_keahlian = $bidang_keahlian;
        $this->jabatan = $jabatan;
    }

    // Getter methods
    public function getNip() {
        return $this->nip;
    }

    public function getBidangKeahlian() {
        return $this->bidang_keahlian;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

    // Setter methods
    public function setBidangKeahlian($bidang_keahlian) {
        $this->bidang_keahlian = $bidang_keahlian;
    }

    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }
}