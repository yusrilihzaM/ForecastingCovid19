<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dataset_model');
        $this->load->model('Kecamatan_model');
        $this->load->model('Peramalan_model');
        $this->load->model('Perhitungan_model');
        is_logged_in();
    }
    public function index()
	{
        $coba=$this->Peramalan_model->get_periode_masa_depan('1',"Sembuh");
        // $coba=$this->Peramalan_model->hitung_model();
        var_dump($coba);
        
        // echo($coba[0]);
    
    }
    
}