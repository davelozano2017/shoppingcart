<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Billing extends CI_Controller {

  public function __construct() {
     parent::__construct();
     $result = $this->model->temptable();
     if($result == false) {
       redirect('products');
     }
  }
	public function index() {
    $data['resulttemptable'] = $this->model->ShowAllTempTable();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/components/navs',$data);
		$this->load->view('template/pages/billing',$data);
		$this->load->view('template/components/footer',$data);
	}

}
