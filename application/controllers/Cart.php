<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cart_model');
  }

  public function index()
  {
    $user_id = $this->session->userdata('user_id');
    $cart_items = $this->Cart_model->get_cart_items($user_id);
    $total = 0;
    foreach ($cart_items as $item) {
      $total += $item['subtotal'];
    }
    $data = array(
      'cart_items' => $cart_items,
      'total' => $total
    );
    $data['judul'] = 'Cart';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('cart/cart', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function add()
  {
    $this->load->model('Cart_model');
    $product_id = $this->input->post('product_id');
    $quantity = $this->input->post('quantity');
    $user_id = $this->session->userdata('user_id'); // assuming you have a user ID stored in the session
    $this->Cart_model->add_to_cart($user_id, $product_id, $quantity);
    redirect('cart'); // redirect to the cart page
  }

  public function update($id)
  {
    $quantity = $this->input->post('quantity');
    $this->Cart_model->update_cart_item($id, $quantity);
    redirect('cart');
  }

  public function remove($id)
  {
    $this->Cart_model->remove_from_cart($id);
    redirect('cart');
  }
}
