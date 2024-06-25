<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('cart_model'); // Load the cart model
  }

  public function index()
  {
    $cart = $this->session->userdata('cart');
    $data['judul'] = 'Checkout';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('checkout/checkout', array('cart' => $cart));
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function process()
  {
    // Process the checkout payment and update the order status
    //...
  }
}
