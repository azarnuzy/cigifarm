<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_Kami extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$site 	= $this->konfigurasi_model->listing();

		$data = array(	'title' => 'Tentang Kami',
						'site'	=> $site,
						'isi'	=> 'tentang_kami/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file tentang_kami.php */
/* Location: ./application/controllers/tentang_kami.php */