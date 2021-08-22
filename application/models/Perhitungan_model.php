<?php
class Perhitungan_model extends CI_model
{
    public function get_perhitungan_byKec($id_kecamatan,$jenis_data)
    {
        $query_dataPerhitungan="SELECT * FROM data_covid NATURAL JOIN  perhitungan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid ASC";
        $dataPerhitungan=$this->db->query($query_dataPerhitungan)->result_array();
        return $dataPerhitungan;
    }
    
    public function get_data_chart($id_kecamatan,$jenis_data){
        $data_row=[];
        $data_chart=[];
        $query_dataPerhitungan="SELECT data_covid, tanggal_covid FROM data_covid NATURAL JOIN  perhitungan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid ASC";
        $dataPerhitungan=$this->db->query($query_dataPerhitungan)->result_array();
        foreach($dataPerhitungan as $dataPerhitungan){
            $data_row[]=strtotime($dataPerhitungan['tanggal_covid']);
            $data_row[]=$dataPerhitungan['data_covid'];
            $data_chart[]= $data_row;
        }
        return  $data_chart;
    }
    public function get_data_chart_at($id_kecamatan,$jenis_data){
        $data_row=[];
        $data_chart=[];
        $query_dataPerhitungan="SELECT data_covid, tanggal_covid FROM data_covid NATURAL JOIN  perhitungan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid ASC";
        $dataPerhitungan=$this->db->query($query_dataPerhitungan)->result_array();
        foreach($dataPerhitungan as $dataPerhitungan){
            $data_row[]=strtotime($dataPerhitungan['tanggal_covid']);
            $data_row[]=$dataPerhitungan['data_covid'];
            $data_chart[]= $data_row;
        }
        return  $data_chart;
    }
    public function get_data_chart_ft($id_kecamatan,$jenis_data){
        $data_row=[];
        $data_chart=[];
        $query_dataPerhitungan="SELECT ft, tanggal_covid FROM data_covid NATURAL JOIN  perhitungan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid ASC";
        $dataPerhitungan=$this->db->query($query_dataPerhitungan)->result_array();
        foreach($dataPerhitungan as $dataPerhitungan){
            $data_row[]=strtotime($dataPerhitungan['tanggal_covid']);
            $data_row[]=$dataPerhitungan['ft'];
            return   $data_row;
        }
      
    }
}