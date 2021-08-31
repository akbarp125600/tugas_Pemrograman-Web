<?php
include 'koneksi.php';
include '../cetak/fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$tgl=date('Y/m/d');
$pdf->setFont('Arial','B',12);
$pdf->Image('../images/logo-perpustakaan.png',10,8,20,19);
$pdf->Cell(187,6,'PERPUSTAKAAN UMUM',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,6,'Jl.Apel No 11, Telp(001)345678',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(10,28,200,28);
$pdf->setFont('Arial','B',10);
$pdf->Cell(187,6,'Laporan Data User',0,1,'C');
$pdf->Ln(1);	
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,4,'Tanggal Cetak '.$tgl,0,1,'C');

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(8,6,'No',1,0,'L',1);
$pdf->Cell(20,6,'ID User',1,0,'L',1);
$pdf->Cell(20,6,'Username',1,0,'L',1);
$pdf->Cell(50,6,'Password',1,1,'L',1);
$pdf->Cell(20,6,'Nama',1,0,'L',1);
$pdf->Cell(20,6,'E-mail',1,0,'L',1);
$pdf->Cell(15,6,'Level',1,0,'L',1);


$nomor=0;
$sql=mysql_query("SELECT * FROM user");
while($data=mysql_fetch_array($sql)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',7);
	$pdf->Cell(8,4,$nomor,1,0,'L');
	$pdf->Cell(20,4,$data['id'],1,0,'L');
	$pdf->Cell(20,4,$data['username'],1,0,'L');
	$pdf->Cell(50,4,$data['password'],1,1,'L');
	$pdf->Cell(20,4,$data['nama'],1,0,'L');
	$pdf->Cell(20,4,$data['email'],1,0,'L');
	$pdf->Cell(15,4,$data['level'],1,0,'L');
}
$pdf->Output('cetak-user.pdf','I');
?>			