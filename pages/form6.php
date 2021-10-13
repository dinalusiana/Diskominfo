<!-- UNTUK FORM PERMOHONAN IZIN -->

<?php
ob_start();
if(!empty($_POST['submit']))
{
$nama = $_POST['nama'];
$perusahaan = $_POST['perusahaan'];
$jabatan = $_POST['jabatan'];
$nama_server = $_POST['nama_server'];
$telp_kantor = $_POST['telp_kantor'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$jawaban = $_POST['jawaban'];
$sebutkan = $_POST['sebutkan'];
$no_kartu =$_POST['no_kartu'];
$tanggal =$_POST['tanggal'];
$waktu_datang =$_POST['waktu_datang'];
$waktu_meninggalkan =$_POST['waktu_meninggalkan'];
$no_rak =$_POST['no_rak'];
$jawaban1 =$_POST['jawaban1'];
$sebutkan1 = $_POST['sebutkan1'];
$kartu_akses =$_POST['kartu_akses'];
$jawaban2 = $_POST['jawaban2'];
$catatan =$_POST['catatan'];

require ("fpdf/fpdf.php");

class PDF extends FPDF{
    function Header(){
        $this->cell(10);
        $this->image('logo_jateng.png',25,10,25);
        $this->SetFont('Arial','B',15);
        $this->Cell(0,0,'',0,1);
        $this->Cell(200,5,'PEMERINTAH PROVINSI JAWA TENGAH',0,1,'C');
        $this->Cell(200,5, 'DINAS KOMUNIKASI DAN INFORMATIKA',0,1,'C');
        $this->SetFont('Arial','',9);
        $this->Cell(200,3, 'Jalan Menteri Supeno I Nomor 2 SemarangKode Pos 50243 Telepon 024-8319140',0,1,'C');
        $this->Cell(200,3, 'Faximile 024-8319328 Email : diskominfo@jatengprov.go.id',0,1,'C');
        $this->Cell(200,3, 'Website : http://diskominfo.jatengprov.go.id',0,1,'C');
        $this->ln(3);
    
    }
}

$pdf = new PDF('P', 'mm', 'A4');
$pdf->SetMargins(20,10,20);
$pdf -> AddPage();
$pdf->SetFont('Arial','B', 12);
$pdf->cell(20,5,'',0,1);
$pdf->Cell(200,5,'Permohonan Izin Akses Pusat Data/Ruang Server',0,1,'C');
$pdf->Cell(200,5,'Data Center/Server Room Access Request',0,1,'C');

$pdf->cell(20,5,'',0,1);
$pdf->cell(50,5, 'Informasi Pemohon / Application Information :',0,1);
 
$pdf->SetFont('Arial','B', 11);
$pdf->cell(60,5,'Nama :',1,0);
$pdf->cell(60,5,'Perusahaan :',1,0);
$pdf->cell(60,5,'Jabatan :',1,1);

$pdf->SetFont('Arial','', 10);
$pdf->cell(60,10,"$nama",1,0);
$pdf->cell(60,10,"$perusahaan",1,0);
$pdf->cell(60,10,"$jabatan",1,1);

$pdf->SetFont('Arial','B', 11);
$pdf->cell(60,5,'Telepon Kantor :',1,0);
$pdf->cell(60,5,'Nomor HP :',1,0);
$pdf->cell(60,5,'Alamat Email :',1,1);

$pdf->SetFont('Arial','', 10);
$pdf->cell(60,10,"$telp_kantor",1,0);
$pdf->cell(60,10,"$no_hp",1,0);
$pdf->cell(60,10,"$email",1,1);

$pdf->SetFont('Arial','B', 11);
$pdf->cell(60,5,'Jenis Kartu Identitas :',1,0);
$pdf->SetFont('Arial','', 11);
$pdf->cell(120,5,"{$jawaban} {$sebutkan}",1,1);

$pdf->SetFont('Arial','B', 11);
$pdf->cell(60,5,'Nomor Kartu :',1,0);
$pdf->SetFont('Arial','', 11);
$pdf->cell(120,5,"$no_kartu",1,1);

$pdf->SetFont('Arial','B', 11);
$pdf->cell(50,5, 'Rincian Permohonan / Detail Request :',0,1);

$pdf->cell(60,5,'Tanggal :',1,0);
$pdf->cell(60,5,'Waktu Datang :',1,0);
$pdf->cell(60,5,'Waktu meninggalkan :',1,1);

$pdf->SetFont('Arial','', 10);
$pdf->cell(60,10,"$tanggal",1,0);
$pdf->cell(60,10,"$waktu_datang",1,0);
$pdf->cell(60,10,"$waktu_meninggalkan",1,1);


$pdf->SetFont('Arial','B', 11);
$pdf->cell(80,5,'Nomor Rak  :',1,0);
$pdf->cell(100,5,'Aktivitas :',1,1);

$pdf->SetFont('Arial','', 10);
$pdf->cell(80,10,"$no_rak",1,0);
$pdf->cell(100,10,"{$jawaban1} {$sebutkan1}",1,1);

$pdf->SetFont('Arial','B', 11);
$pdf->cell(60,5,'No. Kartu Akses :',1,0);
$pdf->cell(60,5,'Izin Pengambilang Gambar :',1,0);
$pdf->cell(60,5,'Catatan :',1,1);

$pdf->SetFont('Arial','', 10);
$pdf->cell(60,10,"$kartu_akses",1,0);
$pdf->cell(60,10,"$jawaban2",1,0);
$pdf->cell(60,10,"$catatan",1,1);

$pdf->SetFont('Arial','B', 10);
$pdf->cell(50,5, 'Regulasi dan Peraturan Ruang Server / Data Center Rules and Regulations :',0,1);
$pdf->SetFont('Arial','', 9);
$pdf->cell(200,5,'- Pelanggan dan Pengunjung harus membawa identifikasi asli yang sesuai dengan mereka setiap kali mengajukan',0,1);
$pdf->cell(200,5,'  akses kedalam Data Center Pemerintah Provinsi Jawa Tengah. Memalsukan atau menyembunyikan identitas atau',0,1);
$pdf->cell(200,5,'  menolak untuk bekerja sama dengan petugas Data Center Pemerintah Provinsi Jawa Tengah merupakan pelanggaran',0,1);
$pdf->cell(200,5,'  terhadap kebijakan Data Center Center Pemerintah Provinsi Jawa Tengah.',0,1);
$pdf->cell(200,5,'-	Segala jenis alas kaki tidak diizinkan masuk area lantai Data Center. Alas kaki harus dilepas di luar ruangan',0,1);
$pdf->cell(200,5,'  Data Center.',0,1);
$pdf->cell(200,5,'- Pelanggan dan Pengunjung dilarang merokok selama berada di dalam gedung atau area Data Center Pemerintah',0,1);
$pdf->cell(200,5,'  Provinsi Jawa Tengah.',0,1);
$pdf->cell(200,5,'-	Segala jenis makanan dan minuman dilarang masuk ke dalam ruang Data Center Pemerintah Provinsi',0,1);
$pdf->cell(200,5,'  Jawa Tengah.',0,1);
$pdf->cell(200,5,'-	Kamera tidak diizinkan di dalam Data Center Pemerintah Provinsi Jawa Tengah tanpa persetujuan terlebih dahulu.',0,1);
$pdf->cell(200,5,'  Hanya foto yang disetujui oleh petugas yang boleh disimpan.',0,1);
$pdf->cell(200,5,'-	Semua Pelanggan dan Pengunjung dibawah pengawasan selama berada didalam area Data Center Pemerintah',0,1);
$pdf->cell(200,5,'  Provinsi Jawa Tengah.',0,1);

$pdf->cell(20,5,'',0,1);
$pdf->cell(200,5,'Saya telah membaca aturan dan regulasi untuk mengakses ruang server / Data Center Pemerintah',0,1);
$pdf->cell(200,5,'Provinsi Jawa Tengah.Saya memahami aturan-aturan, regulasi, dan sanksi yang ada, dan saya setuju',0,1);
$pdf->cell(200,5,'untuk mematuhi.',0,1);


$pdf->SetFont('Arial','', 12);
$pdf->cell(50,10,'',0,1);
$pdf->cell(50,5,'Mengetahui',0,0);

$pdf->cell(50,5,'',0,0);

$pdf->cell(50,5,'Semarang, ',0,1);


$pdf->cell(50,5,'Pengelola Data Center',0,0);

$pdf->cell(50,5,'',0,0);

$pdf->cell(50,5,'Pemohon',0,1);


$pdf->cell(50,8,'',0,1);

$pdf->cell(50,5,'...................',0,0);

$pdf->cell(50,5,'',0,0);

$pdf->cell(50,5,'...................',0,1);

$pdf->Output();
}
ob_end_flush();
?>