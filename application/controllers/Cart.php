<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cart_model');
  }

  public function add($id)
  {
    // Get the product details from the database
    $product = $this->cart_model->get_product_by_id($id);

    // Check if the product exists
    if (!$product) {
      $this->session->set_flashdata('error', 'Product not found');
      redirect('products');
    }

    // Add the product to the cart session
    $cart = $this->session->userdata('cart');
    if (!$cart) {
      $cart = array();
    }
    if (isset($cart[$id])) {
      $cart[$id]['quantity']++;
    } else {
      $cart[$id] = array(
        'id' => $id,
        'name' => $product['name'],
        'price' => $product['price'],
        'quantity' => 1
      );
    }
    $this->session->set_userdata('cart', $cart);

    // Redirect to the cart page
    redirect('cart/index');
  }

  public function index()
  {
    $cart = $this->session->userdata('cart');
    $data['judul'] = 'Cart';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('cart/cart', array('cart' => $cart));
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function update()
  {
    $cart = $this->session->userdata('cart');
    $update_cart = array();
    foreach ($cart as $id => $item) {
      $update_cart[$id] = array(
        'quantity' => $this->input->post($id)
      );
    }
    $this->session->set_userdata('cart', $update_cart);
    redirect('cart/index');
  }

  public function remove($id)
  {
    $cart = $this->session->userdata('cart');
    unset($cart[$id]);
    $this->session->set_userdata('cart', $cart);
    redirect('cart/index');
  }

  public function clear()
  {
    $this->session->unset_userdata('cart');
    redirect('cart/index');
  }
}
