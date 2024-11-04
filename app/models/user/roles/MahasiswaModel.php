<?php
class MahasiswaModel extends UserModels {
  private $nim;
  private $jurusan;
  private $semester;

  public function __construct($username, $password, $email, $first_name, $last_name, $nim, $jurusan, $semester) {
      parent::__construct($username, $password, $email, $first_name, $last_name);
      $this->role = 'mahasiswa';
      $this->nim = $nim;
      $this->jurusan = $jurusan;
      $this->semester = $semester;
  }

  // Getter methods
  public function getNim() {
      return $this->nim;
  }

  public function getJurusan() {
      return $this->jurusan;
  }

  public function getSemester() {
      return $this->semester;
  }

  // Setter methods
  public function setJurusan($jurusan) {
      $this->jurusan = $jurusan;
  }

  public function setSemester($semester) {
      $this->semester = $semester;
  }
}