<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parameterb extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Parameter_model');
        $this->load->model('Peramalan_model');
        is_logged_in();
    }
	public function index()
	{

        $data['title'] = "Parameter Beta";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['beta']=$this->Parameter_model->get_parameter();

        $this->form_validation->set_rules('beta', 'Beta', 'required');
		if ($this->form_validation->run() == false) {
            $this->load->view('Templates/header.php',$data);
            $this->load->view('Templates/navbar.php',$data);
            $this->load->view('Templates/sidebar.php',$data);
            $this->load->view('Parameterb/index.php', $data);
            $this->load->view('Templates/footer.php',$data);
        }
        else{
            $beta =$this->input->post('beta', true);
            $this->Parameter_model->update_parameter($beta);
            $this->Peramalan_model->delete_peramalan();
            $this->Peramalan_model->hitung_model();
            $this->session->set_flashdata('flash', 'Diubah');
            $this->session->set_flashdata('data', 'Beta');
            redirect('Parameterb');
        }

    }
}