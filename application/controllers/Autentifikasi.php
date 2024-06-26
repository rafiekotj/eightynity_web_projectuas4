<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Login';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('autentifikasi/login');
    $this->load->view('templates/aute_footer');
  }

  public function signin()
  {
    $data['judul'] = 'Signin';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('autentifikasi/signin');
    $this->load->view('templates/aute_footer');
  }
}
