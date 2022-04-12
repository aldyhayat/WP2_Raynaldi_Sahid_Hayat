<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Contoh2 extends Controller{

    public function index(){
        echo 'Selamat datang.. selamat belajar web programming';
       
    }

    public function penjumlahan($n1,$n2){
        $userModel = new \App\Models\Model_Latihan1();
        $hasil = $userModel->jumlah($n1, $n2);
        echo 'Hasil penjumlahan dari '.$n1.' + '.$n2.' = '.$hasil;   
       }

} 





?>

