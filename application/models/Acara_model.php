<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Nama Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi'
                ]
            ],
            [
                'field' => 'description',
                'label' => 'Deskripsi Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi'
                ]
            ],
            [
                'field' => 'date',
                'label' => 'Tanggal Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi'
                ]
            ],
            [
                'field' => 'time',
                'label' => 'Waktu Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi'
                ]
            ],
            [
                'field' => 'register_url',
                'label' => 'Link Registrasi',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi'
                ]
            ],
            [
                'field' => 'content',
                'label' => 'Detail Konten',
                'rules' => 'required',
                'errors' => [
                    'required' => '%s harus diisi'
                ]
            ]
        ];
    }

    public function getAllAcara()
    {
        $this->db->select('*');
        $this->db->from('acara');
        $this->db->order_by('id_acara', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function addAcara($data)
    {
        $this->db->insert('acara', $data);
    }

    public function deleteAcara($id)
    {
        $this->db->where('id_acara', $id);
        $this->db->delete('acara');
    }

    public function updateAcara($data, $id)
    {
        $this->db->where('id_acara', $id);
        $this->db->update('acara', $data);
    }

    public function getDetailAcara($id)
    {
        return $this->db->get_where('acara', ['id_acara' => $id], 1)->row_array();
    }
}

?>