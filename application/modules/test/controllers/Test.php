<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data['AA'] = "MRR GANTENG";
		$this->load->view('index', $data, FALSE);
	}

}

/* End of file Test.php */
/* Location: ./application/modules/test/controllers/Test.php */