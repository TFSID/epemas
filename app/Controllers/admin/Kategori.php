<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	public function tambah_data()
    {
       		$this->load->helper('form');
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('Kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('total_data', 'total_data', 'required');
            //$this->form_validation->set_rules('total_data', 'NIS', 'required');
            
    
            if ($this->form_validation->run() == FALSE) {
                echo $data['errors'] = validation_errors();
                // $this->load->view('register');
            } else {
                $this->load->model('model_kategori');
                $data = array(
                    'kategori' => $this->input->post('Kategori'),
                    'total_data' => $this->input->post('total_data'),
					
                    
                );
				
                $this->model_kategori->tambah_data_kategori($data);
				echo $this->db->last_query();
				
                $this->session->set_flashdata('message', 'data ditambahkan');
				// redirect(base_url('admin/Dashboard/kategori'));
				
            }
    }
}
