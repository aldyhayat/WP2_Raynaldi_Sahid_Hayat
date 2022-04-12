<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Latihan1 extends Controller{

    public function index(){
        echo 'Selamat datang.. selamat belajar web programming';
       
    }

    public function penjumlahan($n1,$n2){
        $userModel = new \App\Models\Model_Latihan1();
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $userModel->jumlah($n1,$n2);
        echo view('view-latihan1',$data);
        }

} 





?>

