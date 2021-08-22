<?php
class Perhitungan_model extends CI_model
{
    public function get_perhitungan_byKec($id_kecamatan,$jenis_data)
    {
        $query_dataPerhitungan="SELECT * FROM data_covid NATURAL JOIN  perhitungan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid ASC";
        $dataPerhitungan=$this->db->query($query_dataPerhitungan)->result_array();
        return $dataPerhitungan;
    }
    
    public function get_mape($id_kecamatan,$jenis_data)
    {
        $query_sumMape="SELECT SUM(mape) AS sum_mape FROM data_covid NATURAL JOIN  perhitungan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data'";
        $sumMape=(double)$this->db->query($query_sumMape)->row_array()['sum_mape'];

        $query_countData="SELECT count(id_data_covid) as count FROM data_covid NATURAL JOIN  kecamatan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data'";
        $countData=(int)$this->db->query($query_countData)->row_array()['count'];

        $mape=$sumMape/$countData;
        return $mape;
    }
}