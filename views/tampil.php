<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Selamat Datang Di BPPT Kab Ngawi</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awe/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/heroic-features.css') ?>"/>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BPPT Kab Ngawi</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo site_url('welcome'); ?>">Home</a></li>
      <li><a href="<?php echo site_url('login'); ?>">Login</a></li>
    </ul>
  </div>
</nav>







<center>
<h2>Ini adalah halaman untuk mencari Izin yang sudah disahkan Oleh<br>  Badan Perijinan Kab Ngawi</h2>

<br>
<br>

<p>*gunakan fitur pencarian untuk mencari izin yang sudah disahkan</p>
<?php print 'input nama pemohon : ';?>
<br>
<form action="<?php print site_url();?>/carisk/cari" method=POST>
<input type=text name=cari> <input type=submit value="cari">
</form>

<a href="<?php print site_url();?>/carisk"> <b>tampilkan semua</b></a>
<br>
<br>
<table class="table">
    <thead>
      <tr>
<th>No Registrasi</th>
<th>Nama Pemohon</th>
<th>Jenis Izin</th>
<th>lokasi</th>
<th>status</th>
<th>diambil oleh</th>
<th>alamat</th>
<th>keterangan</th>
      </tr>
<?php foreach($tampil as $row) : ?>

    </thead>
    <tbody>
      <tr class="success">
<td> <?php print $row->noregister; ?> </td>
<td> <?php print $row->namapemohon; ?> </td>
<td> <?php print $row->jenisizin; ?> </td>
<td> <?php print $row->lokasi; ?> </td>
<td> <?php print $row->kategori; ?> </td>
<td> <?php print $row->diambiloleh; ?> </td>
<td> <?php print $row->alamat; ?> </td>
<td><?php print $row->keterangan; ?> </td>
      </tr>
    </tbody>
<?php endforeach; ?>

  </table>



