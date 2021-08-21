<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatasetPerKec extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dataset_model');
        $this->load->model('Kecamatan_model');
        is_logged_in();
    }
    public function index($id)
	{
        $data['data']=$this->Dataset_model->get_dataset_byKecamatan($id);
  
        $data['title'] =  $data['data'][0]['kecamatan'];
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['data']=$this->Dataset_model->get_dataset();
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('DatasetPerKecamatan/index.php', $data);
        $this->load->view('Templates/footer.php',$data);
    }
    
}