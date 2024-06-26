<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'About Us';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('aboutus/aboutus');
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }
}
