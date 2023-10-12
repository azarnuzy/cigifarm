<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllEvents()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->order_by('id_event', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getDetailEvent($id_event)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('id_event', $id_event);
        $this->db->order_by('id_event', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function postEvent()
    {
        $data = array(
            ''
        )
    }
}

?>