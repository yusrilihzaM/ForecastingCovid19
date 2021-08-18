<?php
class Parameter_model extends CI_model
{
    public function get_parameter()
    {
        $this->db->select('*');
        $this->db->from('parameter_beta');
        return $this->db->get()->result_array();
    }

    public function update_parameter($beta){
        $this->db->set('beta',$beta);
        $this->db->where('id_beta',1);
        $this->db->update('parameter_beta');
    }
}