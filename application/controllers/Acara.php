<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acara_model');
    }

    public function index()
    {
        $acara = $this->acara_model->getAllAcara();
        $data = array(
            'title' => 'Acara',
            'acara' => $acara,
            'isi' => 'acara/list'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail($id)
    {
        $acara = $this->acara_model->getDetailAcara($id);

        $data = array(
            'title' => 'Acara',
            'acara' => $acara,
            'isi' => 'acara/detail'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}



?>