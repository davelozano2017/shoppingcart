<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller {

	public function index() {
		$data['resulttemptable'] = $this->model->ShowAllTempTable();
		$data['resulttotal'] = $this->model->ShowTotal();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/components/navs',$data);
		$this->load->view('template/pages/cart',$data);
		$this->load->view('template/components/footer',$data);
	}

}
