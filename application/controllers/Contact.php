<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['content'] = 'contact';
    $data['data'] = [];

    $this->load->view('common/content', $data);
  }

}
