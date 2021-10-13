<!-- UNTUK FORM BA SERAHTERIMA -->

<?php
ob_start();
if(!empty($_POST['submit']))
{
$nama_unit = $_POST['nama_unit'];
$penanggung_jawab = $_POST['penanggung_jawab'];
$nip = $_POST['nip'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$satuan = $_POST['satuan'];
$keterangan = $_POST['keterangan'];
$nama_unit_tujuan =$_POST['nama_unit_tujuan'];
$penanggung_jawab_tujuan =$_POST['penanggung_jawab_tujuan'];
$nip_tujuan =$_POST['nip_tujuan'];


require ("fpdf/fpdf.php");
class PDF extends FPDF{
    function Header(){
        $this->cell(10);
        $this->image('logo_jateng.png',11,12,18);
        $this->SetFont('Arial','B',15);
        $this->Cell(0,0,'',0,1);
    }
}

$pdf = new PDF('P', 'mm', 'A4');
// $pdf->SetMargins(20,10,20);
$pdf -> AddPage();
$pdf->SetFont('Arial','B', 12);
$pdf->cell(20,21,'',1,0);
$pdf->cell(110,21,'',1,0);
$pdf->cell(30,7,'No',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(110,7,'BERITA ACARA SERAH TERIMA BARANG',0,0, 'C');
$pdf->cell(30,7,'Tanggal',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->cell(20,0,'',0,0);
$pdf->cell(110,0,'',0,0);
$pdf->cell(30,7,'Halaman',1,0);
$pdf->cell(30,7,'',1,1);

$pdf->SetFont('Arial','', 12);

$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Nama Unit',0,0);
$pdf->cell(50,7,":{$nama_unit}",0,1);
$pdf->cell(50,7,'Penanggung Jawab',0,0);
$pdf->cell(50,7,":{$penanggung_jawab}",0,1);
$pdf->cell(50,7,'NIP',0,0);
$pdf->cell(50,7,":{$nip}",0,1);

$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Telah menyerahkan barang sebagai berikut :',0,1);

// $pdf->SetFont('Arial','B', 12);
// $pdf->cell(10,14,'No',1,0);
// $pdf->cell(70,14,'Nama Barang',1,0);
// $pdf->cell(85,7,'Spesifikasi Barang',1,0,'C');
// $pdf->cell(25,14,'',1,0);
// $pdf->Cell(0,7,'',0,1);


// $pdf->cell(80,7,'',0,0);
// $pdf->cell(30,7,'Jenis Barang',1,0,'C');
// $pdf->cell(25,7,'Tipe',1,0,'C');
// $pdf->cell(15,7,'Jumlah',1,0,'C');
// $pdf->cell(15,7,'Satuan',1,0,'C');
// $pdf->cell(25,0,'Keterangan',1,1,'C');

// $pdf->SetFont('Arial','', 12);
// $pdf->cell(10,7,'1',1,0);
// $pdf->cell(70,7,"$nama_barang",1,0,'C');
// $pdf->cell(30,7,"$jenis",1,0,'C');
// $pdf->cell(25,7,"$tipe",1,0,'C');
// $pdf->cell(15,7,"$jumlah",1,0,'C');
// $pdf->cell(15,7,"$satuan",1,0,'C');
// $pdf->cell(25,7,"$keterangan",1,1,'C');

$pdf->SetFont('Arial','B', 12);
$pdf->cell(10,10,'No',1,0);
$pdf->cell(70,10,'Nama Barang',1,0,'C');
$pdf->cell(90,5,'Spesifikasi Barang',1,0,'C');
$pdf->cell(25,10,'Keterangan',1,0);
$pdf->Cell(0,5,'',0,1);

$pdf->Cell(80,5,'',0,0);
$pdf->cell(22.5,5,'Jenis',1,0,'C');
$pdf->cell(22.5,5,'Tipe',1,0,'C');
$pdf->cell(22.5,5,'Jumlah',1,0,'C');
$pdf->cell(22.5,5,'Satuan',1,1,'C');


$pdf->SetFont('Arial','', 12);
$pdf->cell(10,5,'1',1,0);
$pdf->cell(70,5,"$nama_barang",1,0,'C');
$pdf->cell(22.5,5,"$jenis",1,0,'C');
$pdf->cell(22.5,5,"$tipe",1,0,'C');
$pdf->cell(22.5,5,"$jumlah",1,0,'C');
$pdf->cell(22.5,5,"$satuan",1,0,'C');
$pdf->cell(25,5,"$keterangan",1,1,'C');


$pdf->cell(10,10,'',0,1);
$pdf->cell(50,7,'Kepada :',0,1);
$pdf->cell(50,7,'Nama Unit',0,0);
$pdf->cell(50,7,":{$nama_unit_tujuan}",0,1);
$pdf->cell(50,7,'Penanggung Jawab',0,0);
$pdf->cell(50,7,":{$penanggung_jawab_tujuan}",0,1);
$pdf->cell(50,7,'NIP',0,0);
$pdf->cell(50,7,":{$nip_tujuan}",0,1);
$pdf->cell(50,7,'Demikian formulir serah terima ini dibuat dengan kondisi sebenarnya.',0,1);

$pdf->cell(50,20,'',0,1);
$pdf->cell(50,7,'Yang Menyerahkan,',0,0);

$pdf->cell(50,5,'',0,0);

$pdf->cell(50,5,'Yang Menerima,',0,1);

$pdf->SetFont('Arial','BU', 12);
$pdf->cell(50,20,'',0,1);
$pdf->cell(50,5,"$penanggung_jawab",0,0);

$pdf->cell(50,5,'',0,0);

$pdf->cell(50,5,"$penanggung_jawab_tujuan",0,1);

$pdf->SetFont('Arial','', 12);
$pdf->cell(50,5,"NIP. {$nip}",0,0);

$pdf->cell(50,5,'',0,0);

$pdf->cell(50,5,"NIP. {$nip_tujuan}",0,1);


$pdf->Output();
}
ob_end_flush();
?>