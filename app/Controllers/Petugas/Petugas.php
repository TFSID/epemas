<?php

namespace App\Controllers\Petugas;

use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
use Irsyadulibad\DataTables;

class Petugas extends BaseController
{
    public function index()
    {
        //
        return view('petugas/dashboard');
    }

    public function profile()
    {
        //
        return view('petugas/profile');
    }

    public function tampil_pengaduan(){
        $crud = new GroceryCrud();

        $crud->setTheme('datatables');
        $crud->setTable('laporan');
        $crud->setSubject('Office');
        $crud->requiredFields(['city']);
        $crud->columns(['city','country','phone','addressLine1','postalCode']);
        $crud->setRead();

        $output = $crud->render();

        return $this->view('petugas/laporan_pengaduan', $output);
    }
}
