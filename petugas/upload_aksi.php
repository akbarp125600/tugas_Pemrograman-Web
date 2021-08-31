<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	  $id_buku           = $data->val($i, 1);
      $id_bidang   = $data->val($i, 2);
      $judul_buku  = $data->val($i, 3);
      $kode_buku = $data->val($i, 4);
      $jumlah_buku = $data->val($i, 5);
      $status = $data->val($i, 6);

	if($id_buku != "" && $id_bidang != "" && $judul_buku != "" && $kode_buku != "" && $jumlah_buku != "" && $status != ""){
		// input data ke database (table data_pegawai)
		mysql_query("INSERT into buku values('$id_buku','$id_bidang','$judul_buku','$kode_buku','$jumlah_buku','$status')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:../index.php?p=buku");
?>