<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {
	public function index() {
		$data['results'] = $this->model->ShowAllProducts();
		$data['resulttemptable'] = $this->model->ShowAllTempTable();
		$this->load->view('template/components/header',$data);
		$this->load->view('template/components/navs',$data);
		$this->load->view('template/pages/products',$data);
		$this->load->view('template/components/footer',$data);
	}

}
