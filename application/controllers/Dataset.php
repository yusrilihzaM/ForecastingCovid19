<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Dataset_model');
        $this->load->model('Kecamatan_model');
        is_logged_in();
    }
	public function index()
	{

        $data['title'] = "Data Covid";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['data']=$this->Dataset_model->get_dataset();
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Dataset/index.php', $data);
        $this->load->view('Templates/footer.php',$data);

    }
    public function add()
	{

        $data['title'] = "Tambah Data";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan();

        $this->form_validation->set_rules('tanggal_covid', 'tanggal_covid', 'required');
        $this->form_validation->set_rules('data_covid', 'Data_covid', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
        $this->form_validation->set_rules('jenis_data', 'jenis_data', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Dataset/add.php', $data);
        $this->load->view('Templates/footer.php',$data);
        }
        else{
            $tanggal_covid =$this->input->post('tanggal_covid', true);
            $data_covid =$this->input->post('data_covid', true);
            $id_kecamatan =$this->input->post('id_kecamatan', true);
            $jenis_data =$this->input->post('jenis_data', true);

            $this->Dataset_model->add_dataset($tanggal_covid,$data_covid,$id_kecamatan,$jenis_data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
			$this->session->set_flashdata('data', 'Data Covid');
			redirect('dataset');
        }
    }
    public function edit($id)
	{

        $data['title'] = "Edit Data";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan();
        $data['data']=$this->Dataset_model->get_dataset_byID($id);
        $data['jenis_data'] = array('Meninggal','Perawatan','Positif', 'Sembuh');
        $this->form_validation->set_rules('tanggal_covid', 'tanggal_covid', 'required');
        $this->form_validation->set_rules('data_covid', 'Data_covid', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
        $this->form_validation->set_rules('jenis_data', 'jenis_data', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('Dataset/edit.php', $data);
        $this->load->view('Templates/footer.php',$data);
        }
        else{
            $id_data_covid =$this->input->post('id_data_covid', true);
            $tanggal_covid =$this->input->post('tanggal_covid', true);
            $data_covid =$this->input->post('data_covid', true);
            $id_kecamatan =$this->input->post('id_kecamatan', true);
            $jenis_data =$this->input->post('jenis_data', true);

            $this->Dataset_model->update_dataset($id_data_covid,$tanggal_covid,$data_covid,$id_kecamatan,$jenis_data);
            $this->session->set_flashdata('flash', 'Di Perbarui');
			$this->session->set_flashdata('data', 'Data Covid');
			redirect('dataset');
        }
    }
    public function delete($id)
	{
		$this->Dataset_model->delete_dataset($id);
		$this->session->set_flashdata('flash', 'dihapus');
        $this->session->set_flashdata('data', 'Data');
        redirect('dataset');
	}
    public function dataperkec($id)
	{
       
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan_byID($id);
        $data['title'] = $data['kecamatan'] ["kecamatan"];
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['data']=$this->Dataset_model->get_dataset_byKecamatan($id);
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('DatasetPerKecamatan/index.php', $data);
        $this->load->view('Templates/footer.php',$data);
    }

    public function adddataperkec($id)
	{
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan_byID($id);
        $data['title'] = "Tambah Data ";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);

        $this->form_validation->set_rules('tanggal_covid', 'tanggal_covid', 'required');
        $this->form_validation->set_rules('data_covid', 'Data_covid', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
        $this->form_validation->set_rules('jenis_data', 'jenis_data', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('DatasetPerKecamatan/add.php', $data);
        $this->load->view('Templates/footer.php',$data);
        }
        else{
            $tanggal_covid =$this->input->post('tanggal_covid', true);
            $data_covid =$this->input->post('data_covid', true);
            $id_kecamatan =$this->input->post('id_kecamatan', true);
            $jenis_data =$this->input->post('jenis_data', true);

            $this->Dataset_model->add_dataset($tanggal_covid,$data_covid,$id_kecamatan,$jenis_data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
			$this->session->set_flashdata('data', 'Data Covid');
            $url="dataset/dataperkec/$id_kecamatan";
			redirect($url);
        }
    }
    public function deletePerKec($id,$id_kecamatan)
	{
          
            $this->Dataset_model->delete_dataset($id);
            $this->session->set_flashdata('flash', 'dihapus');
            $this->session->set_flashdata('data', 'Data');
            $url="dataset/dataperkec/$id_kecamatan";
			redirect($url);
	}

    public function editPerKec($id)
	{

        $data['title'] = "Edit Data";
        $id_user=$this->session->userdata('id_user');
        $data['user']=$this->User_model->get_user($id_user);
        $data['kecamatan']=$this->Kecamatan_model->get_kecamatan();
        $data['data']=$this->Dataset_model->get_dataset_byID($id);
        $data['jenis_data'] = array('Meninggal','Perawatan','Positif', 'Sembuh');
        $this->form_validation->set_rules('tanggal_covid', 'tanggal_covid', 'required');
        $this->form_validation->set_rules('data_covid', 'Data_covid', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
        $this->form_validation->set_rules('jenis_data', 'jenis_data', 'required');
		if ($this->form_validation->run() == false) {
        $this->load->view('Templates/header.php',$data);
        $this->load->view('Templates/navbar.php',$data);
        $this->load->view('Templates/sidebar.php',$data);
        $this->load->view('DatasetPerKecamatan/edit.php', $data);
        $this->load->view('Templates/footer.php',$data);
        }
        else{
            $id_data_covid =$this->input->post('id_data_covid', true);
            $tanggal_covid =$this->input->post('tanggal_covid', true);
            $data_covid =$this->input->post('data_covid', true);
            $id_kecamatan =$this->input->post('id_kecamatan', true);
            $jenis_data =$this->input->post('jenis_data', true);

            $this->Dataset_model->update_dataset($id_data_covid,$tanggal_covid,$data_covid,$id_kecamatan,$jenis_data);
            $this->session->set_flashdata('flash', 'Di Perbarui');
			$this->session->set_flashdata('data', 'Data Covid');
			$url="dataset/dataperkec/$id_kecamatan";
			redirect($url);
        }
    }
}