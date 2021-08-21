<?php
class Dataset_model extends CI_model
{
    public function get_dataset()
    {
        $this->db->select('*');
        $this->db->from('data_covid');
        $this ->db->join('kecamatan','data_covid.id_kecamatan=kecamatan.id_kecamatan', 'left');
        return $this->db->get()->result_array();
    }
    public function get_dataset_byID($id_data_covid)
    {
        $this->db->select('*');
        $this->db->from('data_covid');
        $this ->db->join('kecamatan','data_covid.id_kecamatan=kecamatan.id_kecamatan', 'left');
        $this->db->where('id_data_covid',$id_data_covid);
        return $this->db->get()->row_array();
    }
    public function get_dataset_byKecamatan($id_kecamatan)
    {
        $this->db->select('*');
        $this->db->from('data_covid');
        $this ->db->join('kecamatan','data_covid.id_kecamatan=kecamatan.id_kecamatan', 'left');
        $this->db->where('id_kecamatan',$id_kecamatan);
        return $this->db->get()->row_array();
    }
    public function update_dataset(
        $id_data_covid,
        $tanggal_covid,
        $data_covid,
        $id_kecamatan,
        $jenis_data
        ){
            $this->db->set('tanggal_covid',$tanggal_covid);
            $this->db->set('data_covid',$data_covid);
            $this->db->set('id_kecamatan',$id_kecamatan);
            $this->db->set('jenis_data',$jenis_data);    
            $this->db->where('id_data_covid',$id_data_covid);
            $this->db->update('data_covid');
    }
    
    public function add_dataset($tanggal_covid,$data_covid,$id_kecamatan,$jenis_data){
        $data = array(
            'id_data_covid'    => "",
            'tanggal_covid'    => $tanggal_covid,
            'data_covid'    =>   $data_covid,
            'id_kecamatan'    => $id_kecamatan,
            'jenis_data'    =>  $jenis_data
        );
        $this->db->insert('data_covid', $data);
    }
    public function delete_dataset($id_data_covid){
        $this->db->where('id_data_covid', $id_data_covid);
        $this->db->delete('data_covid');
    }
}