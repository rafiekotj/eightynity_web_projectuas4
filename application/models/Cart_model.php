<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart_model extends CI_Model
{
  private $table = 'carts';

  public function __construct()
  {
    parent::__construct();
    $this->table = 'carts';
  }

  public function get_cart_items($user_id)
  {
    $this->db->select('c.id, c.user_id, c.product_id, c.quantity, p.name as product_name, p.price, (c.quantity * p.price) as subtotal');
    $this->db->from('carts c');
    $this->db->join('products p', 'c.product_id = p.id');
    $this->db->where('c.user_id', $user_id);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function add_to_cart($user_id, $product_id, $quantity)
  {
    $this->db->where('user_id', $user_id);
    $this->db->where('product_id', $product_id);
    $query = $this->db->get($this->table);

    if ($query->num_rows() > 0) {
      // Cart item already exists, update quantity
      $cart_item = $query->row_array();
      $new_quantity = $cart_item['quantity'] + $quantity;
      $data = array(
        'quantity' => $new_quantity
      );
      $this->db->where('id', $cart_item['id']);
      $this->db->update($this->table, $data);
    } else {
      // Create a new cart item
      $data = array(
        'user_id' => $user_id,
        'product_id' => $product_id,
        'quantity' => $quantity
      );
      $this->db->insert($this->table, $data);
    }
  }

  public function update_cart_item($id, $quantity)
  {
    $data = array(
      'quantity' => $quantity
    );
    $this->db->where('id', $id);
    $this->db->update($this->table, $data);
    return $this->db->affected_rows();
  }

  public function remove_from_cart($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->table);
    return $this->db->affected_rows();
  }
}
