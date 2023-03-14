<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PetugasModel;

class Login extends BaseController {

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
        // Views
        echo view('layout/header_link');
		echo view('login.php');
        echo view('layout/footer_link');          
    }

    public function loginP()
	{
        // Views
        echo view('layout/header_link');
		echo view('loginP.php');
        echo view('layout/footer_link');          
    }

    public function test(){

        
        
    }


    public function auth()
{
    $db = \Config\Database::connect();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $account_type = $this->request->getPost('account_type');


    


    // $password = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($password)) {
        
        // Select database table based on account type
            switch ($account_type) {
                case 'admin':
                    $table = 'admin';
                    break;
                case 'petugas':
                    $table = 'petugas';
                    break;
                case 'masyarakat':
                    $table = 'masyarakat';
                    break;
                default:
                    return redirect()->back()->withInput()->with('error', 'Invalid account type');
            }

        $loginmodel = new UserModel;
        $user = $loginmodel->verify_user($username, $password);
        $petugas = $loginmodel->verify_petugas($username, $password);
        
        if  ($petugas){
        $session = session();
        $session->set('logged_in', true);
        $session->set('id_user', $petugas->username); // assuming UserID is the primary key
        return redirect('petugas/dashboard',['namespace' => 'App\Controller\Petugas']);
        
        // return redirect()->to(base_url('/dashboard'))->withQuery(['namespace' => 'App/Controller/Petugas']);
        // return redirect()->to(base_url('/dashboard'),['namespace' => 'App/Controller/Petugas']);
        }

        if ($user) {
            
             $session = session();
            $session->set('logged_in', true);
            $session->set('id_user', $user->username); // assuming UserID is the primary key
            // return redirect('home');
            return redirect()->to(base_url('/home'));
        } else {
                $session = session();
            $session->setFlashdata('error', 'Invalid username or password');
            $lastQuery = $db->getLastQuery();
            echo $lastQuery;
            }
            

        } 
    
}
public function authP()
{
    $db = \Config\Database::connect();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    // $password = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($password)) {
        

        $loginmodel = new PetugasModel();
        $user = $loginmodel->verify_user($username, $password);

        if ($user) {
            $session = session();
            $session->set('logged_in', true);
            $session->set('id_user', $user->id_petugas); // assuming UserID is the primary key
            // return redirect('index');
            return redirect()->to(base_url('/admin/Dashboard'));

        } else {
            $session = session();
            $session->setFlashdata('error', 'Invalid username or password');
            $lastQuery = $db->getLastQuery();
            echo $lastQuery;
        }
    } else {
        $session = session();
        $session->setFlashdata('error', 'Please enter a password');
        echo "gagal";
    }
}

}
