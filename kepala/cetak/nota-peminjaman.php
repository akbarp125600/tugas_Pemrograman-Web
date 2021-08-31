<?php
$connect = mysql_connect("localhost","koko","pilkoplo");
$connect = mysql_select_db("perpustakaan");
include'fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$tgl=date('Y/m/d');			
$pdf->Rect(8,6,194,60);
$pdf->Image('../images/logo-perpustakaan.png',10,8,20,19);
$pdf->setFont('Arial','B',12);
$pdf->Cell(187,6,'PERPUSTAKAAN UMUM',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,6,'Jl.Apel No 11, Telp(001)345678',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(10,28,200,28);
$pdf->setFont('Arial','B',10);
$pdf->Cell(187,6,'Nota Peminjaman Buku',0,1,'C');
$pdf->Ln(2);	
$pdf->SetLineWidth(0.3);
$pdf->Line(10,34,200,34);	
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,4,'Tanggal Cetak '.$tgl,0,0,'C');
$pdf->Ln(6);

$id_transaksi=$_GET['kode'];
$nomor=0;
$q_nota_peminjaman=mysql_query(
	"SELECT * FROM tbl_transaksi");
while($r_nota_peminjaman=mysql_fetch_array($q_nota_peminjaman)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',10);
	$pdf->Cell(25,5,'ID Transaksi',0,0,'L');
	$pdf->Cell(60,5,': '.$r_nota_peminjaman['id_transaksi'],0,0,'L');
	$pdf->Cell(25,5,'Tanggal Pinjam',0,0,'L');
	$pdf->Cell(86,5,': '.$r_nota_peminjaman['nama'],0,1,'L');
	$pdf->Cell(25,5,'ID Anggota',0,0,'L');
	$pdf->Cell(60,5,': '.$r_nota_peminjaman['jurusan'],0,0,'L');
	$pdf->Cell(25,5,'ID Buku',0,0,'L');
	$pdf->Cell(86,5,': '.$r_nota_peminjaman['kode_buku'],0,1,'L');
	$pdf->Cell(25,5,'Nama',0,0,'L');
	$pdf->Cell(60,5,': '.$r_nota_peminjaman['tepat_waktu'],0,0,'L');
	$pdf->Cell(25,5,'Judul Buku',0,0,'L');
	$pdf->Cell(86,5,': '.$r_nota_peminjaman['jenis_denda'],0,1,'L');
	$pdf->SetLineWidth(0.3);
	$pdf->Line(10,58,200,58);
}
$pdf->Ln(8);
$pdf->Cell(187,6,'TERIMA KASIH TELAH BERKUNJUNG',0,1,'C');

$pdf->Output('nota-peminjaman.pdf','I');
?>			