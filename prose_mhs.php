<?php 
include('config.php'); 
$db = new Database(); 
 
$action = $_GET['action']; 
if ($action == "add") { 
 $nim = $_POST['NIM']; 
 $nama = $_POST['namaMhs']; 
 $angkatan = $_POST['angkatan']; 
 $kode_prodi = $_POST['kode_prodi']; 
  
 $db->tambah_data($nim, $nama, $angkatan, $kode_prodi); 
 header('location:tampil_data.php');
 elseif ($action == "update") { 
  $id = $_POST['id']; 
  $nim = $_POST['NIM']; 
  $nama = $_POST['namaMhs']; 
  $angkatan = $_POST['angkatan']; 
  $kode_prodi = $_POST['kode_prodi']; 
 
  $db->update_data($id, $nim, $nama, $angkatan, $kode_prodi); 
  header('location:tampil_data.php'); 
 }
}
