<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilPerhitungan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Kecamatan_model');
        $this->load->model('Perhitungan_model');
        is_logged_in();
    }
	public function index()
	{

        $data['title'] = "Hasil Perhitungan Peramalan";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan();
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Perhitungan/index.php', $data);
        $this->load->view('Templates/footer.php',$data);
    }

    public function detail($id)
	{
        $data['data']=$this->Kecamatan_model->get_kecamatan_byID(1);
        $data['title'] =   $data['data']['kecamatan'];
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan();

        $data['positif_perhitungan']=$this->Perhitungan_model->get_perhitungan_byKec($id,"Positif");
        $data['meninggal_perhitungan']=$this->Perhitungan_model->get_perhitungan_byKec($id,"Meninggal");
        $data['sembuh_perhitungan']=$this->Perhitungan_model->get_perhitungan_byKec($id,"Sembuh");
        $data['perawatan_perhitungan']=$this->Perhitungan_model->get_perhitungan_byKec($id,"Perawatan");
        

        $data['mape_positif_perhitungan']=$this->Perhitungan_model->get_mape($id,"Positif");
        $data['mape_meninggal_perhitungan']=$this->Perhitungan_model->get_mape($id,"Meninggal");
        $data['mape_sembuh_perhitungan']=$this->Perhitungan_model->get_mape($id,"Sembuh");
        $data['mape_perawatan_perhitungan']=$this->Perhitungan_model->get_mape($id,"Perawatan");

        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Perhitungan/detail.php', $data);
        $this->load->view('Templates/footer.php',$data);

    }
    
}