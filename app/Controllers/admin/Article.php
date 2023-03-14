<?php

namespace App\Controllers;

class Article extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function tambah_data()
    {
        helper(['form']);
        $validation = \Config\Services::validation();
        $validation->setRules([
            'Kategori' => 'required',
            'total_data' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $data['errors'] = $validation->listErrors();
            echo $data['errors'];
        } else {
            $model_kategori = new \App\Models\Model_Kategori();
            $data = [
                'kategori' => $this->request->getVar('Kategori'),
                'total_data' => $this->request->getVar('total_data'),
            ];
            $model_kategori->tambah_data_kategori($data);
            echo $this->db->getLastQuery();
            $this->session->setFlashdata('message', 'data ditambahkan');
            // return redirect()->to(base_url('admin/Dashboard/kategori'));
        }
    }
}
