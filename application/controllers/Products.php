<?php
class Products extends CI_Controller
{
  public function index()
  {
    $data['judul'] = 'Products';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('products/products');
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }
}
