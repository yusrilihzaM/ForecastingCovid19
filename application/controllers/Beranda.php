<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dataset_model');
        is_logged_in();
    }
	public function index()
	{

        $data['title'] = "Beranda";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);

        $data['count_positif']=$this->Dataset_model->get_sum_dataset("Positif");
        $data['count_meninggal']=$this->Dataset_model->get_sum_dataset("Meninggal");
        $data['count_sembuh']=$this->Dataset_model->get_sum_dataset("Sembuh");
        $data['count_perawatan']=$this->Dataset_model->get_sum_dataset("Perawatan");

        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Beranda/index.php', $data);
        $this->load->view('Templates/footer.php',$data);

    }
}