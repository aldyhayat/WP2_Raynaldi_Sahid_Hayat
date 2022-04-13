<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;



class Web extends Controller{

    public function index(){
        // $page = 'web'
        // if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
        //     // Whoops, we don't have a page for that!
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }

        $data['judul'] = "Halaman Depan";
        echo view('v_header',$data);
        echo view('v_index',$data);
        echo view('v_footer',$data);
    }

    public function about(){
        // $page = 'web'
        // if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
        //     // Whoops, we don't have a page for that!
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }

        $data['judul'] = "Halaman About";
        echo view('v_header',$data);
        echo view('v_about',$data);
        echo view('v_footer',$data);
    }
 
}







?>