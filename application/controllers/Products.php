<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function index()
  {
    $this->load->model('Product_model');
    $products = $this->Product_model->get_all_products();
    $data['products'] = $products;
    $data['judul'] = 'Products';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('products/products', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function detail($id)
  {
    $this->load->model('Product_model');
    $product = $this->Product_model->get_product_by_id($id);
    $data['product'] = $product;
    $data['judul'] = 'Detail';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('products/product_detail', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }
}
