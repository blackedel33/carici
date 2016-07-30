<?php
class M_welcome extends CI_Model{
 
 function __construct(){
  parent::__construct();
 }
 function tampil(){
//$this->db->from('mahasiswa');
$query = $this->db->get('tabel_sk');
return $query->result(); 
 }
 function caridata(){
$c = $this->input->POST ('cari');
$this->db->like('namapemohon', $c);
$query = $this->db->get ('tabel_sk');
return $query->result(); 
 }
 }
