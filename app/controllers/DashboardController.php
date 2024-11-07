<?php

class DashboardController extends Controller
{
  public function index()
  {
    $data = ['title' => 'Dashboard'];
    $this->view('templats/header', $data);
    $this->view('dashboard/index', $data);
    $this->view('templats/footer');
  }
}


