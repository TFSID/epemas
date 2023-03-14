<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function landing_page()
        {
        if(session()->get('logged_in')){
            return redirect()->to(base_url('/home'));
        }

        return view('layout/header_link') 
        . view('layout/navbar')
        . view('landing_page')
        . view('layout/footer_link');
    }

    
}
