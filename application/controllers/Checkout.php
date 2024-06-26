<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Checkout_model');
    $this->load->model('User_model'); // Load Users_model here
  }

  public function index()
  {
    $user_id = $this->session->userdata('user_id');
    $cart_items = $this->Checkout_model->get_cart_items($user_id);
    $total = 0;
    foreach ($cart_items as $item) {
      $total += $item['subtotal'];
    }
    $data = array(
      'cart_items' => $cart_items,
      'total' => $total
    );
    $data['judul'] = 'Checkout';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('checkout/checkout', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function process()
  {
    $user_id = $this->session->userdata('user_id');
    $cart_items = $this->Checkout_model->get_cart_items($user_id);
    $total = 0;
    foreach ($cart_items as $item) {
      $total += $item['subtotal'];
    }

    $order_data = array(
      'user_id' => $user_id,
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'address' => $this->input->post('address'),
      'phone' => $this->input->post('phone'),
      'total' => $total
    );

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');

    if ($this->form_validation->run() == true) {
      $this->Checkout_model->place_order($order_data, $cart_items);
      redirect('checkout/order_history');
    } else {
      $this->index();
    }
  }

  public function success()
  {
    $data['judul'] = 'Order Placed Successfully';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('checkout_success', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }

  public function order_history()
  {
    $user_id = $this->session->userdata('user_id');
    $data = array(
      'order_history' => $this->Checkout_model->get_order_history($user_id)
    );
    $data['judul'] = 'Order History';
    $this->load->view('templates/aute_header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('checkout/order_history', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/aute_footer');
  }
}
