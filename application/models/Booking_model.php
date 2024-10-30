<?php
class Booking_model extends CI_Model
{
    public function insert_booking($data)
    {
        $this->db->insert('tiket', $data);
    }

    public function get_booking_by_id($id_tiket)
    {
        return $this->db->get_where('tiket', array('id_tiket' => $id_tiket))->row();
    }
}