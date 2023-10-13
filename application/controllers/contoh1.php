<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
        echo"Selamat Datang.. Selamat Belajar Web Programming";
        //$this->load->view('view-contoh1');
    }
    public function penjumlahan($n1, $n2)    
    {
         $this->load->model('Model_contoh1');
         
         $data['nilai1'] = $n1;
         $data['nilai2'] = $n2;
         $data['hasil'] = $this->Model_contoh1->jumlah($n1, $n2);
         
         $this->load->view('view-contoh1', $data);
    }
    
}