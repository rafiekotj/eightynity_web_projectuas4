<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller

{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model', 'user');
  }

  public function index()
  {
    $data = array();
    if ($this->session->userdata('isUserLoggedIn')) {
      $con = array(
        'id' => $this->session->userdata('userId')
      );
      $data['user'] = $this->user->getRows($con);

      // Pass the user data and load view
      $data['judul'] = 'Home';
      $this->load->view('templates/aute_header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('home/home', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/aute_footer');
    } else {
      redirect('users/login');
    }
  }
}
