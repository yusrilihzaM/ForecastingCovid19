<?php
class Peramalan_model extends CI_model
{
  
    public function hitung_model(){
        
        $query_datakecamatan="SELECT * FROM kecamatan ORDER BY id_kecamatan asc";
        $datakecamatan=$this->db->query($query_datakecamatan)->result_array();
        $jenis_data = array('Meninggal','Perawatan','Positif', 'Sembuh');
        foreach($datakecamatan as $datakecamatan){
            $id_kecamatan=$datakecamatan['id_kecamatan'];
            
            for ($x = 0; $x <= sizeof($jenis_data)-1; $x++) {
                $this->hitung_peramalan_perkecamatan($id_kecamatan,$jenis_data[$x]);
            }
        }
    }
    public function hitung_peramalan_perkecamatan($id_kecamatan,$jenis_data){

        //ambil semua data covid
        $query_dataPerkecamatan="SELECT * FROM data_covid NATURAL JOIN  kecamatan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid ASC";
        $dataPerkecamatan=$this->db->query($query_dataPerkecamatan)->result_array();
        
        //ambil count data
        $query_countData="SELECT count(id_data_covid) FROM data_covid NATURAL JOIN  kecamatan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data'";
        $countData=$this->db->query($query_countData)->result_array();
        
        //ambil parameter beta
        $query_Beta="SELECT beta FROM parameter_beta";
        $Beta=(double)$this->db->query($query_Beta)->row_array()['beta'];

        $index = 0;
        foreach($dataPerkecamatan as $data) {
            //ambil data perhitungan sebelumnya
            $query_dataSebelumnya="SELECT * FROM perhitungan NATURAL JOIN data_covid NATURAL JOIN kecamatan WHERE id_kecamatan=$id_kecamatan AND jenis_data='$jenis_data' ORDER BY tanggal_covid DESC";
            $dataSebelumnya=$this->db->query($query_dataSebelumnya)->row_array();
            if($index==0){
                $data = array(
                    'id_perhitungan'    => "",
                    'id_data_covid'    => $dataPerkecamatan[$index]['id_data_covid'],
                    'ft'    => 0,
                    'error'    => null,
                    'Et'    => 0,
                    'AEt'    => 0,
                    'alpha'    => 0,
                    'mape'    => null
                );
                $this->db->insert('perhitungan', $data);
            }
            else if($index==1){
                
                $at=$dataPerkecamatan[$index]['data_covid'];
                $ft=$dataPerkecamatan[$index-1]['data_covid'];
                
                // //error
                $error=$at-$ft;
                
                // //Et
                $EtSebelumnya= $dataSebelumnya['Et'];
                $Et=($Beta*$error)+((1-$Beta)*$EtSebelumnya);
                //AEt
                $AEtSebelumnya=$dataSebelumnya['AEt'];
                $AEt=abs(($Beta*$error)+(1-$Beta)*$AEtSebelumnya);

                //mape
                $mape=abs($error/$at)*100;
                $data = array(
                    'id_perhitungan'    => "",
                    'id_data_covid'    => $dataPerkecamatan[$index]['id_data_covid'],
                    'ft'    =>  $ft,
                    'error'    => $error,
                    'Et'    =>$Et,
                    'AEt'    =>  $AEt,
                    'alpha'    => $Beta,
                    'mape'    => $mape
                );
                $this->db->insert('perhitungan', $data);
            }
            else 
            if($index==2 or $index==3){
                // data at
                $at=$dataPerkecamatan[$index]['data_covid'];

                //data at-1 
                $atSebelumnya= $dataPerkecamatan[$index-1]['data_covid'];

                //data ft-1
                $ftSebelumnya= $dataSebelumnya['ft'];

                //alpha
                $alpha=$Beta;
               
                //ft
                $ft=($alpha*$atSebelumnya)+((1-$alpha)*$ftSebelumnya);
                
                // //error
                $error=$at-$ft;
                
                // //Et
                $EtSebelumnya= $dataSebelumnya['Et'];
                $Et=($Beta*$error)+((1-$Beta)*$EtSebelumnya);
                //AEt
                $AEtSebelumnya=$dataSebelumnya['AEt'];
                $AEt=abs(($Beta*$error)+(1-$Beta)*$AEtSebelumnya);

                //mape
                $mape=abs($error/$at)*100;
                $data = array(
                    'id_perhitungan'    => "",
                    'id_data_covid'    => $dataPerkecamatan[$index]['id_data_covid'],
                    'ft'    =>  $ft,
                    'error'    => $error,
                    'Et'    =>$Et,
                    'AEt'    =>  $AEt,
                    'alpha'    => $alpha,
                    'mape'    => $mape
                );
                $this->db->insert('perhitungan', $data);
            }
            else
         {
                //data at
                $at=$dataPerkecamatan[$index]['data_covid'];

                // data at-1
                $atSebelumnya= $dataSebelumnya['data_covid'];

                //data ft-1
                $ftSebelumnya= $dataSebelumnya['ft'];

                //data Et-1
                $EtSebelumnya= $dataSebelumnya['Et'];

                //Data AEt-1
                $AEtSebelumnya=$dataSebelumnya['AEt'];


                // data alpha jika alpha ==0 maka set alpha 0                
                if($EtSebelumnya!=0 and $AEtSebelumnya!=0){
                    $alpha=abs($EtSebelumnya/$AEtSebelumnya);
                }else{
                    $alpha=0;
                }

                // ft
                $ft=($alpha*$atSebelumnya)+((1-$alpha)*$ftSebelumnya);

                // //error
                $error=$at-$ft;
                
                // //Et
                $Et=($Beta*$error)+((1-$Beta)*$EtSebelumnya);

                //AEt
                $AEt=abs(($Beta*$error)+(1-$Beta)*$AEtSebelumnya);
                //mape
                $mape=abs($error/$at)*100;
                $data = array(
                    'id_perhitungan'    => "",
                    'id_data_covid'    => $dataPerkecamatan[$index]['id_data_covid'],
                    'ft'    =>  $ft,
                    'error'    => $error,
                    'Et'    =>$Et,
                    'AEt'    =>  $AEt,
                    'alpha'    => $alpha,
                    'mape'    => $mape
                );
                $this->db->insert('perhitungan', $data);
            }
            $index++;
        }
    }
    public function delete_peramalan()
    {
        $this->db->empty_table('perhitungan');
    }
}