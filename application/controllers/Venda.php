<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda extends CI_Controller {
	public function index()
	{
        if (!$this->input->post()) {
			redirect('../');
		}
        $this->load->view('venda/index.php');
	}

}
