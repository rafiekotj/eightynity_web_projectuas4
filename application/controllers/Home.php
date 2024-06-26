<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('home/home');
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }
}
