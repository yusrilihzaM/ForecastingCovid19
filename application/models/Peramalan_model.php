<?php
class Peramalan_model extends CI_model
{
    public function hitung_peramalan()
    {
        $jenis_data = array('Meninggal','Perawatan','Positif', 'Sembuh');
        foreach($jenis_data as $jenis_data){
            echo $jenis_data;
        }
    }
    public function delete_peramalan()
    {
        $this->db->empty_table('perhitungan');
    }
}