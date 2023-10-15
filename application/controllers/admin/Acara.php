<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acara_model');
        $this->load->library('form_validation');
        $this->simple_login->cek_login();
    }

    public function tambah()
    {
        $acara = $this->acara_model->getAllAcara();
        $valid = $this->form_validation;
        $valid->set_rules($this->acara_model->rules());

        if ($valid->run()) {
            $config['upload_path'] = './assets/upload/image/acara/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['max_size'] = '24000'; // Dalam Kb
            $config['max_width'] = '10000';
            $config['max_height'] = '10000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('banner')) {
                $banner_upload = $this->upload->data();
                $banner = $banner_upload['file_name'];
            }

            if ($this->upload->do_upload('thumbnail')) {
                $thumbnail_upload = $this->upload->data();
                $thumbnail = $thumbnail_upload['file_name'];
            }

            if ($banner && $thumbnail) {
                // get other data
                $i = $this->input;
                $data = [
                    'name' => $i->post('name'),
                    'slug' => url_title($i->post('name'), 'dash', TRUE),
                    'description' => $i->post('description'),
                    'date' => $i->post('date'),
                    'time' => $i->post('time'),
                    'register_url' => $i->post('register_url'),
                    'thumbnail' => $thumbnail,
                    'banner' => $banner,
                    'content' => $i->post('content')
                ];

                $this->acara_model->addAcara($data);
                $this->session->set_flashdata('sukses', 'Data telah ditambah');
                redirect(base_url('admin/acara'), 'refresh');
            } else {
                $data = [
                    'title' => 'Tambah Acara',
                    'acara' => $acara,
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/acara/tambah'
                ];
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            }
        }

        $data = [
            'title' => 'Tambah Acara',
            'isi' => 'admin/acara/tambah'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function index()
    {
        $acara = $this->acara_model->getAllAcara();

        $data = array(
            'title' => 'Data Acara',
            'acara' => $acara,
            'isi' => 'admin/acara/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function hapus($id)
    {
        $acara = $this->acara_model->getDetailAcara($id);
        unlink('./assets/upload/image/acara/' . $acara['banner']);
        unlink('./assets/upload/image/acara/' . $acara['thumbnail']);

        $this->acara_model->deleteAcara($id);
        $this->session->set_flashdata('sukses', 'Data telah dihapus');
        redirect(base_url('admin/acara'), 'refresh');
    }

    public function ubah($id)
    {
        $acara = $this->acara_model->getDetailAcara($id);

        $valid = $this->form_validation;
        $valid->set_rules($this->acara_model->rules());

        if ($valid->run()) {
            $config['upload_path'] = './assets/upload/image/acara/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['max_size'] = '20000'; // Dalam Kb
            $config['max_width'] = '10000';
            $config['max_height'] = '10000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('banner')) {
                $banner = $this->upload->data();
                $banner = $banner['file_name'];
            }

            if ($this->upload->do_upload('thumbnail')) {
                $thumbnail = $this->upload->data();
                $thumbnail = $thumbnail['file_name'];
            }

            if ($banner && $thumbnail) {
                // get other data
                $i = $this->input;
                $data = [
                    'name' => $i->post('name'),
                    'slug' => url_title($i->post('name'), 'dash', TRUE),
                    'description' => $i->post('description'),
                    'date' => $i->post('date'),
                    'time' => $i->post('time'),
                    'register_url' => $i->post('register_url'),
                    'thumbnail' => $thumbnail,
                    'banner' => $banner,
                    'content' => $i->post('content')
                ];

                $this->acara_model->updateAcara($data, $id);
                $this->session->set_flashdata('sukses', 'Data telah diubah');
                redirect(base_url('admin/acara'), 'refresh');
            } else {
                $data = [
                    'title' => 'Ubah Acara',
                    'acara' => $acara,
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/acara/edit'
                ];
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            }
        }

        $data = [
            'title' => 'Ubah Acara',
            'acara' => $acara,
            'isi' => 'admin/acara/edit'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}