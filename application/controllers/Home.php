<?php

if(!defined('BASEPATH')){
  exit('No direct script access allowed');
}

class Home extends MX_Controller{

  public function index(){
    if($this->session->userdata('user_id') == ''){
      header('Location: ' . url('login'));
    }
    else{
      $data = array();
      $data['userinfo'] = $this->master->get_userinfo();
      $data['meta']['title'] = 'Home';
      $this->load->view('home', $data);
    }
  }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */