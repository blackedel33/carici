<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class carisk extends CI_Controller{
 
 function __construct(){
  parent::__construct();
  
  $this->load->model('m_welcome');
  $this->load->helper('html'); 
  $this->load->library('table'); 
 }
    function index() {
        $data['tampil'] = $this->m_welcome->tampil();
        $this->load->view('tampil',$data);
		
    }
    function cari() {
       $data['tampil']=$this->m_welcome->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('welcome','kembali');
          }
          else {
             $this->load->view('tampil',$data); 

}
}
}


