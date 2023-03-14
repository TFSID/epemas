<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PengaduanModel;
use App\Libraries\GroceryCrud;
use Irsyadulibad\DataTables;

class User extends BaseController
{
    public function home()
    {

        return view('layout/header_link') 
        . view('layout/navbar')
        . view('user/index')
        . view('layout/footer_link');
    }

    public function pengaduan_biodata()
    {
        $username = session()->get('id_user');

        return DataTables::use('masyarakat')
            ->where(['username' => $username])
            
            ->make(true);

        // Or with helper (recommended)
        return datatables('masyarakat')->make();
    }

    public function pengaduan()
    {
        if(!session()->get('logged_in')){
            return redirect()->to(base_url('/login'));
        }

        $username = session()->get('id_user');

        // $model = new UserModel;

        // $data['biodata'] = $model->getUserById($username);
        
        // GROCERY

        // $crud = new GroceryCrud();
        // $crud->setTable('masyarakat');
        // $crud->columns(['nik','nama','username','tlpn','Email']);
        // $crud->where('username', $username);
        // $crud->setRead();
        // $crud->unsetJquery();
        // $crud->unsetJqueryUi();
        // $crud->unsetRead();
        // $crud->unsetOperations();
        // $crud->unsetBackToDatagrid();
        // $output = $crud->render();
        

        

        $model = new UserModel;

        $data['biodata'] = $model->getUserById($username)->getResultArray();

        return view('layout/header_link')
        . view('layout/navbar')
        . view('form_pengaduan' , $data)
        . view('layout/footer_link');
    }
    public  function dashboard()
    {
        return 
        
        view('user/dashboard');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }

    public  function tanggapan()
    {
        return 
        
        view('user/tanggapan');
    }

    public function profile(){
        return view('user/profile');
    }

    public function kirim_pengaduan(){

      $model = new PengaduanModel;
      
    //   $foto = $this->upload->data();

      $data = [
        'nik' => $this->request->getVar('NIK'),
        'isi_laporan' => $this->request->getVar('isi_laporan'),
        // 'foto' => $foto['file_name'];
        'subject' => $this->request->getPost('subject'),
        'status' => "proses",
        'tgl_pengaduan' => date('Y-m-d')

        //more value? add here
      ];
        
    //   $q = $model->kirim_pengaduan($data);
      $db = \Config\Database::connect();

      if($model->insert($data)){
        //success
        //return redirect()->to(base_url().'/controller');
        $lastQuery = $db->getLastQuery();
            echo $lastQuery;

      } else {
        //failed
        //return redirect()->to(base_url().'/controller');
        echo "error";
      }
    }
}
