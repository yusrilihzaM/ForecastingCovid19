<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Kecamatan_model');
        is_logged_in();
    }
	public function index()
	{

        $data['title'] = "Kecamatan";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan();
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Kecamatan/index.php', $data);
        $this->load->view('Templates/footer.php',$data);

    }
}