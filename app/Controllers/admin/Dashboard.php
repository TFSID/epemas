<?php

namespace App\Controllers\admin;

class Dashboard extends BaseController
{
    public function __construct()
    {
		helper(['url']);

		$this->session = \Config\Services::session();

        if (!$this->session->has('logged_in')) {
            return redirect()->to('login');
        }
    }

    public function index()
    {
        if(!session()->get('logged_in')){
            return redirect()->to(base_url('/login-petugas'));
        }

        return view('admin/index');

            // view('admin/navbar') .
            // view('admin/sidebar') .
            // view('admin/main') .
            // view('admin/footer');
    }

    public function delete_id($NIS)
    {
        $model = new \App\Models\Model_DataSiswa();

        $model->delete_students_byid($NIS);

        return redirect()->to('admin/dashboard/table');
    }

    public function kategori()
    {
        $model = new \App\Models\Model_Kategori();

        $data['category'] = $model->get_all_category();
        $data['category_count'] = count($data['category']);
        $data['delete'] = $model->get_all_category();

        return view('admin/header') .
            view('admin/navbar') .
            view('admin/sidebar') .
            view('admin/main') .
            view('admin/v_kategori', $data) .
            view('admin/main_footer') .
            view('admin/footer');
    }

    public function article()
    {
        $model = new \App\Models\Model_Article();

        $data['article'] = $model->get_all_article();
        $data['article_count'] = count($data['article']);

        return view('admin/header') .
            view('admin/navbar') .
            view('admin/sidebar') .
            view('admin/main') .
            view('admin/v_article', $data) .
            view('admin/main_footer') .
            view('admin/footer');
    }

    public function table()
    {
        $model = new \App\Models\Model_DataSiswa();

        $data['siswa'] = $model->get_all_students();
        $data['siswa_count'] = count($data['siswa']);
        $data['delete'] = $model->get_all_students();

        return view('admin/header') .
            view('admin/navbar') .
            view('admin/sidebar') .
            view('admin/main') .
            view('admin/tabel_siswa', $data) .
            view('admin/main_footer') .
            view('admin/footer');
    }

    public function logout()
    {
        $this->session->remove('logged_in');
        return redirect()->to(base_url('/login-petugas'));
    }
}
