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
    public function add()
	{

        $data['title'] = "Tambah Kecamatan";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
      

        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Kecamatan/add.php', $data);
        $this->load->view('Templates/footer.php',$data);
        }
        else{
            $kecamatan =$this->input->post('kecamatan', true);
            $this->Kecamatan_model->add_kecamatan($kecamatan);
            $this->session->set_flashdata('flash', 'Ditambahkan');
			$this->session->set_flashdata('data', 'Kecamatan');
			redirect('kecamatan');
        }
    }
    public function delete($id)
	{
		$this->Kecamatan_model->delete_kecamatan($id);
		$this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Kecamatan');
        redirect('kecamatan');
	}

    public function edit($id){
        $data['title'] = "Edit Kecamatan";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan_byID($id);

        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Kecamatan/edit.php', $data);
        $this->load->view('Templates/footer.php',$data);
        }
        else{
            $kecamatan =$this->input->post('kecamatan', true);
            $id_kecamatan =$this->input->post('id_kecamatan', true);
            
            $this->Kecamatan_model->update_kecamatan($kecamatan,$id_kecamatan);
            $this->session->set_flashdata('flash', 'Di Edit');
			$this->session->set_flashdata('data', 'Kecamatan');
			redirect('kecamatan');
        }
    }
}