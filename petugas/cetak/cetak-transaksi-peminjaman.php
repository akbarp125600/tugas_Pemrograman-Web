<?php
include'koneksi.php';
include'../cetak//fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$tgl=date('Y/m/d');
$pdf->setFont('Arial','B',12);
$pdf->Image('ubhara.png',10,8,20,19);
$pdf->Cell(187,6,'PERPUSTAKAAN UNIVERSITAS BHAYANGKARA SURABAYA',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,6,'Jl.AHMAD YANI No 11, Telp(001)345678',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(10,28,200,28);
$pdf->setFont('Arial','B',10);
$pdf->Cell(187,6,'Laporan Transaksi Peminjaman Buku',0,1,'C');
$pdf->Ln(1);	
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,4,'Tanggal Cetak '.$tgl,0,1,'C');
		
$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(8,6,'No',1,0,'L',1);
$pdf->Cell(20,6,'ID Transaksi',1,0,'L',1);
$pdf->Cell(18,6,'ID Anggota',1,0,'L',1);
$pdf->Cell(24,6,'Nama',1,0,'L',1);
$pdf->Cell(20,6,'Jurusan',1,0,'L',1);
$pdf->Cell(20,6,'Kode Buku',1,0,'L',1);
$pdf->Cell(24,6,'Judul Buku',1,0,'L',1);
$pdf->Cell(24,6,'Tanggal Pinjam',1,1,'L',1);


$nomor=0;
$q_transaksi=mysql_query(
	"SELECT * FROM tbl_transaksi"
);
while($r_transaksi=mysql_fetch_array($q_transaksi)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',7);
	$pdf->Cell(8,4,$nomor,1,0,'L');
	$pdf->Cell(20,4,$r_transaksi['id_transaksi'],1,0,'L');
	$pdf->Cell(18,4,$r_transaksi['id_anggota'],1,0,'L');
	$pdf->Cell(24,4,$r_transaksi['nama'],1,0,'L');
	$pdf->Cell(20,4,$r_transaksi['jurusan'],1,0,'L');
	$pdf->Cell(20,4,$r_transaksi['kode_buku'],1,0,'L');
	$pdf->Cell(24,4,$r_transaksi['buku'],1,1,'L');
	$pdf->Cell(24,4,$r_transaksi['tgl_pinjam'],1,0,'L');
	}
	
$pdf->Output('cetak-transaksi-peminjaman.pdf','I');
?>			