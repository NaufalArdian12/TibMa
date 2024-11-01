<?php

class Home extends Controller
{
  public function index()
  {
    $data = ['title' => 'Home'];
    $this->view('templats/header', $data);
    $this->view('home/index');
    $this->view('templats/footer');
  }
}
