<?php
namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController {

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
        echo view('layout/header_link');
		echo view('register.php');
        echo view('layout/footer_link');
	}
        public function verify() {
            $this->load->helper('form');
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
    
            if ($this->form_validation->run() == FALSE) {
                echo $data['errors'] = validation_errors();
                // $this->load->view('register');
            } else {
                $this->load->model('user_model');
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $this->user_model->insert_data($data);
                $this->session->set_flashdata('message', 'You are registered and can log in');
                redirect('login');
            }
        }

        public function validation(){

            helper(['form']);
    $validation = \Config\Services::validation();
    $db = \Config\Database::connect();

    $validation->setRules([
        'username' => 'required',
        'fullname' => 'required',
        'telp' => 'required',
        'email' => 'required|valid_email',
        'nik' => 'required',
        'password' => 'required',
        'confirm_password' => 'required|matches[password]'
    ]);

    $pass = $this->request->getVar('password');

    if (!$validation->withRequest($this->request)->run()) {
        $data['errors'] = $validation->getErrors();
        // return view('register', $data);
        echo view('register', $data);
    } else {
        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'nama' => $this->request->getVar('fullname'),
            'tlpn' => $this->request->getVar('telp'),
            'nik' => $this->request->getVar('nik'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($pass, PASSWORD_DEFAULT)
        ];
        $userModel->save($data);
        $session = session();
        $session->setFlashdata('message', 'You are registered and can log in');
        return redirect()->to(base_url('/login'));
        // $lastQuery = $db->getLastQuery();
        //     echo $lastQuery;
    }
        }
    
    
}
