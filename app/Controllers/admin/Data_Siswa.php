<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Siswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		echo "Ini Fungsi User";
	}
    public function tambah_data()
    {
       		$this->load->helper('form');
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('Username', 'Username', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('NIS', 'NIS', 'required');
            
    
            if ($this->form_validation->run() == FALSE) {
                echo $data['errors'] = validation_errors();
                // $this->load->view('register');
            } else {
                $this->load->model('user_model');
                $data = array(
                    'username' => $this->input->post('Username'),
                    'email' => $this->input->post('Email'),
					'NIS' => $this->input->post('NIS'),
                    
                );
				
                $this->user_model->tambah_data_siswa($data);
				echo $this->db->last_query();
				
                 $this->session->set_flashdata('message', 'data ditambahkan');
            //    redirect('admin/dashboard/table');
            }
    }
}
