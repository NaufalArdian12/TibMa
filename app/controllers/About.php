<?php

class About extends Controller
{

  public function index($nama = 'nopal', $pekerjaan = 'programmer', $umur = 20)
  {
    $data = [
      'nama' => $nama,
      'pekerjaan' => $pekerjaan,
      'umur' => $umur,
      'title' => 'About Me'
    ];

    $this->view('templats/header', $data);
    $this->view('about/index', $data);
    $this->view('templats/footer');
  }
  public function page()
  {
    $data['title'] = 'Pages';
    $this->view('templats/header', $data);
    $this->view('about/page');
    $this->view('templats/footer');
  }
}
