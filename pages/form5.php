<!-- UNTUK BA PENGAMBILAN -->

<?php
ob_start();
if(!empty($_POST['submit']))
{
$nama_skpd = $_POST['nama_skpd'];
$penanggung_jawab = $_POST['penanggung_jawab'];
$nip = $_POST['nip'];
$nama_server = $_POST['nama_server'];
$prosesor = $_POST['prosesor'];
$ram = $_POST['ram'];
$os = $_POST['os'];
$storage = $_POST['storage'];
$psu = $_POST['psu'];
$nama_skpd_tujuan =$_POST['nama_skpd_tujuan'];
$penanggung_jawab_tujuan =$_POST['penanggung_jawab_tujuan'];
$nip_tujuan =$_POST['nip_tujuan'];

require ("fpdf/fpdf.php");

class PDF extends FPDF{
    function Header(){
        $this->cell(10);
        $this->image('logo_jateng.png',11,15,18);
        // $this->SetFont('Arial','B',15);
        // $this->Cell(0,0,'',0,1);
        // $this->Cell(200,5,'PEMERINTAH PROVINSI JAWA TENGAH',0,1,'C');
        // $this->Cell(200,5, 'DINAS KOMUNIKASI DAN INFORMATIKA',0,1,'C');
        // $this->SetFont('Arial','',9);
        // $this->Cell(200,3, 'Jalan Menteri Supeno I Nomor 2 SemarangKode Pos 50243 Telepon 024-8319140',0,1,'C');
        // $this->Cell(200,3, 'Faximile 024-8319328 Email : diskominfo@jatengprov.go.id',0,1,'C');
        // $this->Cell(200,3, 'Website : http://diskominfo.jatengprov.go.id',0,1,'C');
        $this->ln(3);
    
    }
}



$pdf = new PDF('P', 'mm', 'A4');
$pdf -> AddPage();
$pdf->SetFont('Arial','B', 12);



$pdf = new PDF('P', 'mm', 'A4');
// $pdf->SetMargins(10,10,20);
$pdf -> AddPage();
$pdf->SetFont('Arial','B', 12);
$pdf->cell(20,21,'',1,0);
$pdf->cell(100,21,'',1,0);
$pdf->cell(30,7,'No',1,0);
$pdf->cell(40,7,'',1,1);
// $pdf->Cell(0,5,'',0,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(100,7,'BERITA ACARA PENGAMBILAN BARANG',0,0, 'C');
$pdf->cell(30,7,'Tanggal',1,0);
$pdf->cell(40,7,'',1,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(100,0,'',0,0);
$pdf->cell(30,7,'Halaman',1,0);
$pdf->cell(40,7,'',1,1);

$pdf->SetFont('Arial','', 12);

$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Yang bertanda tangan dibawah ini',0,1);
$pdf->cell(50,7,'Nama SKPD',0,0);
$pdf->cell(50,7,":{$nama_skpd}",0,1);
$pdf->cell(50,7,'Penanggung Jawab',0,0);
$pdf->cell(50,7,":{$penanggung_jawab}",0,1);
$pdf->cell(50,7,'NIP',0,0);
$pdf->cell(50,7,":{$nip}",0,1);

$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Telah menyerahkan co-location sebagai berikut :',0,1);

$pdf->SetFont('Arial','B', 12);
$pdf->cell(10,14,'No',1,0);
$pdf->cell(80,14,'Nama Server',1,0,'C');
$pdf->cell(100,7,'Spesifikasi Server',1,0,'C');
$pdf->cell(0,7,'',0,1);


$pdf->cell(90,7,'',0,0);
$pdf->cell(20,7,'Prosesor',1,0,'C');
$pdf->cell(20,7,'RAM',1,0,'C');
$pdf->cell(20,7,'OS',1,0,'C');
$pdf->cell(20,7,'Storage',1,0,'C');
$pdf->cell(20,7,'PSU',1,1,'C');


$pdf->SetFont('Arial','', 12);
$pdf->cell(10,7,'1',1,0);
$pdf->cell(80,7,"$nama_server",1,0,'C');
$pdf->cell(20,7,"$prosesor",1,0,'C');
$pdf->cell(20,7,"$ram",1,0,'C');
$pdf->cell(20,7,"$os",1,0,'C');
$pdf->cell(20,7,"$storage",1,0,'C');
$pdf->cell(20,7,"$psu",1,1,'C');

$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Kepada :',0,1);
$pdf->cell(50,7,'Nama SKPD',0,0);
$pdf->cell(50,7,":{$nama_skpd_tujuan}",0,1);
$pdf->cell(50,7,'Penanggung Jawab',0,0);
$pdf->cell(50,7,":{$penanggung_jawab_tujuan}",0,1);
$pdf->cell(50,7,'NIP',0,0);
$pdf->cell(50,7,":{$nip_tujuan}",0,1);
$pdf->cell(50,7,'Demikian BA serah terima ini dibuat dengan kondisi sebenarnya.',0,1);

$pdf->cell(50,20,'',0,1);
$pdf->cell(50,7,'Yang Menerima,',0,0);

$pdf->cell(50,7,'',0,0);

$pdf->cell(50,7,'Yang Menyerahkan,',0,1);

$pdf->SetFont('Arial','BU', 12);
$pdf->cell(50,20,'',0,1);
$pdf->cell(50,7,"$penanggung_jawab_tujuan",0,0);

$pdf->cell(50,7,'',0,0);

$pdf->cell(50,7,"$penanggung_jawab",0,1);

$pdf->SetFont('Arial','', 12);
$pdf->cell(50,7,"NIP. {$nip_tujuan}",0,0);

$pdf->cell(50,7,'',0,0);

$pdf->cell(50,7,"NIP. {$nip}",0,1);

$pdf->Output();
}
ob_end_flush();
?>