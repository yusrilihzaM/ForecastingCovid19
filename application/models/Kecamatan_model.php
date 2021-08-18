<?php
class Kecamatan_model extends CI_model
{
    public function get_kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        return $this->db->get()->result_array();
    }

    public function update_kecamatan($kecamatan,$id_kecamatan){
        $this->db->set('kecamatan',$kecamatan);
        $this->db->where('id_kecamatan',$id_kecamatan);
        $this->db->update('kecamatan');
    }
    public function add_kecamatan($kecamatan,$id_kecamatan){
        $this->db->set('kecamatan',$kecamatan);
        $this->db->where('id_kecamatan',$id_kecamatan);
        $this->db->update('kecamatan');
    }
}