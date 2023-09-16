<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = array(
            'veiculos' => $this->core_model->get_all('veiculos'),
        );

		$this->load->view('home/index.php', $data);
	}

}
