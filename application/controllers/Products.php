<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function index()
  {
    $this->load->model('Product_model');
    $data['judul'] = 'Products';
    $data['products'] = $this->Product_model->get_all_products();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('products/products', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function detail($id)
  {
    $this->load->model('Product_model');
    $data['judul'] = 'Product Detail';
    $data['product'] = $this->Product_model->get_product_by_id($id);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('products/product_detail', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }
}
