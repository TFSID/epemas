<?php

namespace App\Controllers\Petugas;

use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
use Irsyadulibad\DataTables;

class Laporan extends BaseController
{
    public function index()
    {
        //
    }

    public function L_pengaduan()
    {
        return redirect()->to(base_url('petugas/laporan/pengaduan'));
    }

    public function pengaduan(){
        $crud = new GroceryCrud();
        // $crud->setTheme('bootstrap-v5');
        // $crud->setSkin('bootstrap-v5');
        $crud->setTheme('tefos');
        $crud->setTable('pengaduan');
        $crud->setSubject('Laporan');
        // $crud->requiredFields(['city']);
        $crud->columns(['id_pengaduan','tgl_pengaduan','nik','isi_laporan','foto','status']);
        $crud->setRead();
        // Unsetting all the buttons to see the result of the set function
// $crud->unsetExport();
// $crud->unsetPrint();
// $crud->unsetOperations();
$crud->editFields(['isi_laporan','subject','status']);
        $crud->setEdit();

        $output = $crud->render();

        return view('petugas/laporan_pengaduan', (array)$output);
    }
}
