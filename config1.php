<?php 
class Database 
{ 
 
  var $host = "localhost"; 
  var $username = "root"; 
  var $password = "S3t14w4n"; 
  var $database = "nilaiMahasiswa"; 
  var $koneksi = ""; 
 
  function __construct() 
  { 
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database); 
    if (mysqli_connect_errno()) { 
      echo "Koneksi database gagal : " . mysqli_connect_error();
  } 
} 
 
function tampil_data() 
{ 
  $data = mysqli_query($this->koneksi, "select * from mhs"); 
  while ($row = mysqli_fetch_assoc($data)) { 
    $hasil[] = $row; 
  } 
  return $hasil; 
} 

function tambah_data($nim, $nama, $angkatan, $kode_prodi) 
{ 
  mysqli_query($this->koneksi, "INSERT INTO mhs (NIM, namaMhs, angkatan, kode_prodi) VALUES('$nim','$nama','$angkatan','$kode_prodi')"); 
} 
