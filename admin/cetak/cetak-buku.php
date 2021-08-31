<?php
include'koneksi.php';
include'fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage('P','A4');

$tgl=date('Y/m/d');
$pdf->setFont('Arial','B',12);
$pdf->Image('ubhara.png',10,8,20,19);
$pdf->Cell(187,6,'PERPUSTAKAAN UNIVERSITAS BHAYANGKARA SURABAYA',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,6,'Jl.ACHMAD YANI No 11, Telp(001)345678',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(10,28,200,28);
$pdf->setFont('Arial','B',10);
$pdf->Cell(187,6,'Laporan Data Buku',0,1,'C');
$pdf->Ln(1);	
$pdf->setFont('Arial','B',8);
$pdf->Cell(187,4,'Tanggal Cetak '.$tgl,0,1,'C');

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(8,6,'No',1,0,'L',1);
$pdf->Cell(14,6,'ID Buku',1,0,'L',1);
$pdf->Cell(48,6,'Judul',1,0,'L',1);
$pdf->Cell(40,6,'Jenis Buku',1,0,'L',1);
$pdf->Cell(40,6,'Tahun Terbit',1,0,'L',1);
$pdf->Cell(40,6,'Bidang Buku',1,1,'L',1);

$nomor=0;
$sql=mysql_query("SELECT a.kode_buku, a.judul_buku, b.jenis_buku, b.tahun_terbit, c.bidang_buku from buku a inner join jenis_buku b on a.kode_buku=b.kode_buku join bidang_buku c on a.id_bidang=c.id_bidang");
while($data=mysql_fetch_array($sql)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',7);
	$pdf->Cell(8,4,$nomor,1,0,'L');
	$pdf->Cell(14,4,$data['kode_buku'],1,0,'L');
	$pdf->Cell(48,4,$data['judul_buku'],1,0,'L');
	$pdf->Cell(40,4,$data['jenis_buku'],1,0,'L');
	$pdf->Cell(40,4,$data['tahun_terbit'],1,0,'L');
	$pdf->Cell(40,4,$data['bidang_buku'],1,1,'L');
}
$pdf->Output('cetak-buku.pdf','I');
?>			