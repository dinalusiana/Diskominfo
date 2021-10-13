<!-- UNTUK FORM PENGAJUAN COLOCATION -->
<?php
ob_start();
if(!empty($_POST['submit']))
{
$nama_unit = $_POST['nama_unit'];
$penanggung_jawab = $_POST['penanggung_jawab'];
$nip = $_POST['nip'];
$alamat_unit = $_POST['alamat_unit'];
$kontak = $_POST['kontak'];
$nama_domain = $_POST['nama_domain'];
$tanggal_aktif = $_POST['tanggal_aktif'];
$co_location = $_POST['co_location'];


require ("../fpdf/fpdf.php");


class PDF extends FPDF{
    function Header(){
        $this->cell(10);
        $this->image('logo_jateng.png',21,11,18);
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
$pdf = new PDF('P', 'mm', 'A4');
$pdf->SetMargins(20,10,20);
$pdf -> AddPage();
$pdf->SetFont('Arial','B', 12);
$pdf->cell(20,21,'',1,0);
$pdf->cell(100,21,'',1,0);
$pdf->cell(30,7,'No',1,0);
$pdf->cell(30,7,'',1,1);
// $pdf->Cell(0,5,'',0,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(100,7,'FORMULIR PENGAJUAN CO-LOCATION',0,0, 'C');
$pdf->cell(30,7,'Tanggal',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(100,0,'',0,0);
$pdf->cell(30,7,'Halaman',1,0);
$pdf->cell(30,7,'',1,1);

// $pdf->cell(100,5,'FORMULIR PENGAJUAN CO-LOCATION',1,0);
// $pdf->cell(10,5,'No',1,0);
// $pdf->cell(10,5,'',1,1);
// $pdf->cell(10,5,'Tanggal',1,0);
// $pdf->cell(10,5,'',1,1);
// $pdf->cell(10,5,'Halaman',1,0);
// $pdf->cell(10,5,'',1,1);

$pdf->SetFont('Arial','', 12);

$pdf->cell(10,10,'',0,1);

$pdf->cell(50,7,'Nama Unit                      :',0,0);
$pdf->cell(50,7,"$nama_unit",0,1);
$pdf->cell(50,7,'Penanggung Jawab       :',0,0);
$pdf->cell(50,7,"$penanggung_jawab",0,1);
$pdf->cell(50,7,'NIP                                 :',0,0);
$pdf->cell(50,7,"$nip",0,1);
$pdf->cell(50,7,'Alamat Unit                    :',0,0);
$pdf->cell(50,7,"$alamat_unit",0,1);
$pdf->cell(50,7,'Alamat Unit                    :',0,0);
$pdf->cell(50,7,"$alamat_unit",0,1);
$pdf->cell(50,7,'Kontak Number              :',0,0);
$pdf->cell(50,7,"$kontak",0,1);
$pdf->cell(50,7,'Nama Domain                :',0,0);
$pdf->cell(50,7,"$nama_domain",0,1);
$pdf->cell(50,7,'Tanggal Aktif Domain    :',0,0);
$pdf->cell(50,7,"$tanggal_aktif",0,1);
$pdf->cell(50,7,'Alamat Unit                    :',0,0);
$pdf->cell(50,7,"$alamat_unit",0,1);
$pdf->cell(50,7,'Co-location                    :',0,0);
$pdf->cell(50,7,"$co_location",0,1);

$pdf->cell(50,20,'',0,1);


$pdf->SetFont('Arial','B', 12);

$pdf->cell(50,7,'KORDINATOR PENGELOLA DATA CENTER',0,1);
$pdf->cell(50,7,'DINAS KOMUNIKASI DAN INFORMATIKA',0,1);
$pdf->cell(50,7,'PROVINSI JAWA TENGAH',0,1);

$pdf->cell(50,20,'',0,1);

$pdf->SetFont('Arial','U', 12);
$pdf->cell(50,7,"$penanggung_jawab",0,1);
$pdf->cell(50,7,"NIP. {$nip}",0,1);


$pdf->Output();
}
ob_end_flush();
?>