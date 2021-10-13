<!-- UNTUK FORM PERSETUJUAN COLOCATION -->
<?php
ob_start();
if(!empty($_POST['submit']))
{
$nama_domain = $_POST['nama_domain'];
$jawaban = $_POST['jawaban'];
$permohonan = $_POST['permohonan'];
$pertimbangan = $_POST['pertimbangan'];
$noc = $_POST['noc'];
$letak_server = $_POST['letak_server'];
$nama_domain1 = $_POST['nama_domain1'];
$co_location = $_POST['co_location'];
$noc1 = $_POST['noc1'];
$letak_server1 = $_POST['letak_server1'];
$sn_server = $_POST['sn_server'];
$type_merk = $_POST['type_merk'];
$nama_domain2 = $_POST['nama_domain2'];
$host = $_POST['host'];
$password = $_POST['password'];
$ip_address = $_POST['ip_address'];


require ("fpdf/fpdf.php");


class PDF extends FPDF{
    function Header(){
        $this->cell(10);
        $this->image('logo_jateng.png',21,10,18);
        $this->SetFont('Arial','B',15);
        $this->Cell(0,0,'',0,1);
        // $this->Cell(200,5,'PEMERINTAH PROVINSI JAWA TENGAH',0,1,'C');
        // $this->Cell(200,5, 'DINAS KOMUNIKASI DAN INFORMATIKA',0,1,'C');
        // $this->SetFont('Arial','',9);
        // $this->Cell(200,3, 'Jalan Menteri Supeno I Nomor 2 SemarangKode Pos 50243 Telepon 024-8319140',0,1,'C');
        // $this->Cell(200,3, 'Faximile 024-8319328 Email : diskominfo@jatengprov.go.id',0,1,'C');
        // $this->Cell(200,3, 'Website : http://diskominfo.jatengprov.go.id',0,1,'C');
        // $this->ln(3);
    
    }
}

$pdf = new  PDF('P', 'mm', 'A4');
$pdf->SetMargins(20,10,20);
$pdf -> AddPage();
$pdf->SetFont('Arial','B', 12);
$pdf->cell(20,21,'',1,0);
$pdf->cell(100,21,'',1,0);
$pdf->cell(30,7,'No',1,0);
$pdf->cell(30,7,'',1,1);


$pdf->cell(20,0,'',0,0);
$pdf->cell(100,7,'FORMULIR PERSETUJUAN CO-LOCATION',0,0, 'C');
$pdf->cell(30,7,'Tanggal',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(100,0,'',0,0);
$pdf->cell(30,7,'Halaman',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->SetFont('Arial','', 12);

$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Nama Domain',0,0);
$pdf->cell(50,7,":{$nama_domain}",0,1);
$pdf->cell(50,7,"Telah {$jawaban} permohonan colocation di {$permohonan}",0,1);
$pdf->cell(50,7,'Dengan pertimbangan',0,1);
$pdf->cell(200,7,"$pertimbangan",0,1);

$pdf->cell(10,10,'',0,1);
$pdf->SetFont('Arial','B', 12);
$pdf->cell(50,7,'Data Center',0,1);

$pdf->SetFont('Arial','', 12);
$pdf->cell(50,7,'NOC',0,0);
$pdf->cell(50,7,":{$noc}",0,1);
$pdf->cell(50,7,'Lokasi Server',0,0);
$pdf->cell(50,7,":{$letak_server}",0,1);
$pdf->cell(50,7,'Nama Domain',0,0);
$pdf->cell(50,7,":{$nama_domain1}",0,1);

$pdf->cell(10,10,'',0,1);
$pdf->SetFont('Arial','B', 12);
$pdf->cell(50,7,'Co-Location',0,1);

$pdf->SetFont('Arial','', 12);
$pdf->cell(50,7,'NOC',0,0);
$pdf->cell(50,7,":{$noc1}",0,1);
$pdf->cell(50,7,'Lokasi Server',0,0);
$pdf->cell(50,7,":{$letak_server1}",0,1);
$pdf->cell(50,7,'S/N Server',0,0);
$pdf->cell(50,7,":{$sn_server}",0,1);
$pdf->cell(50,7,'Type & Merk',0,0);
$pdf->cell(50,7,":{$type_merk}",0,1);
$pdf->cell(50,7,'Nama Domain',0,0);
$pdf->cell(50,7,":{$nama_domain2}",0,1);
$pdf->cell(50,7,'Host Admin',0,0);
$pdf->cell(50,7,":User : {$host}  Password : {$password}",0,1);
$pdf->cell(50,7,'IP Address',0,0);
$pdf->cell(50,7,":{$ip_address}",0,1);


$pdf->cell(50,20,'',0,1);


$pdf->SetFont('Arial','', 12);
$pdf->cell(50,7,'Telah menyetujui',0,1);
$pdf->cell(50,7,'Kepala Bidang TIK',0,1);

$pdf->cell(50,20,'',0,1);

$pdf->SetFont('Arial','', 12);
$pdf->cell(50,7,'(                             )',0,1);


$pdf->Output();
}
ob_end_flush();
?>