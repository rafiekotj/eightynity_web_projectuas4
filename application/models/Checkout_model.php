<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout_model extends CI_Model
{

  private $table = 'orders';

  public function __construct()
  {
    parent::__construct();
    $this->table = 'orders';
  }

  public function get_cart_items($user_id)
  {
    $this->db->select('carts.*, products.name as product_name, products.price');
    $this->db->from('carts');
    $this->db->join('products', 'carts.product_id = products.id');
    $this->db->where('carts.user_id', $user_id);
    $query = $this->db->get();
    $cart_items = $query->result_array();

    foreach ($cart_items as &$item) {
      $item['subtotal'] = $item['quantity'] * $item['price'];
    }

    return $cart_items;
  }

  public function place_order($order_data, $cart_items)
  {
    $this->db->insert('orders', $order_data);
    $order_id = $this->db->insert_id();

    foreach ($cart_items as $item) {
      $order_item_data = array(
        'order_id' => $order_id,
        'product_id' => $item['product_id'],
        'quantity' => $item['quantity'],
        'subtotal' => $item['subtotal']
      );
      $this->db->insert('order_items', $order_item_data);
    }

    // Remove cart items
    $this->db->where('user_id', $order_data['user_id']);
    $this->db->delete('carts');

    return true;
  }

  public function get_order_history($user_id)
  {
    $this->db->where('user_id', $user_id);
    $query = $this->db->get('orders');
    return $query->result_array();
  }
}
