<?php include 'dashboard.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Add Data Hosting</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- <div class="row"> -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h4 class="card-title">Silahkan isi data Anda!</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="../db/aksi_indexhosting.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_opd" class="col-sm-2 col-form-label">Nama OPD</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" id="instansi" name="nama_opd" style="width: 100%" required>             
                        <option selected disabled value="">-Pilih-</option>
                        <option value="Dinas Pendidikan dan Kebudayaan">Dinas Pendidikan dan Kebudayaan</option>
                        <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                        <option value="RSUD Dr. Moewardi">RSUD Dr. Moewardi</option>
                        <option value="RSUD Prof. Dr. Margono Soekarjo">RSUD Prof. Dr. Margono Soekarjo</option>
                        <option value="RSUD Tugurejo Semarang">RSUD Tugurejo Semarang</option>
                        <option value="RSUD Kelet Donorejo">RSUD Kelet Donorejo</option>
                        <option value="RSJD Dr. Amino Gondohutomo">RSJD Dr. Amino Gondohutomo</option>
                        <option value="RSJD Surakarta">RSJD Surakarta</option>
                        <option value="RSJD Dr. RM Soedjarwadi">RSJD Dr. RM Soedjarwadi</option>
                        <option value="Dinas Pekerjaan Umum Bina Marga dan Cipta Karya">Dinas Pekerjaan Umum Bina Marga dan Cipta Karya</option>
                        <option value="Dinas Pekerjaan Umum Sumber Daya Air dan Penataan Ruang">Dinas Pekerjaan Umum Sumber Daya Air dan Penataan Ruang</option>
                        <option value="Dinas Perumahan Rakyat dan Kawasan Permukiman">Dinas Perumahan Rakyat dan Kawasan Permukiman</option>
                        <option value="Satuan Polisi Pamong Praja">Satuan Polisi Pamong Praja</option>
                        <option value="Badan Kesatuan Bangsa dan Politik">Badan Kesatuan Bangsa dan Politik</option>
                        <option value="Dinas Sosial">Dinas Sosial</option>
                        <option value="Sekretariat Badan Penanggulangan Bencana">Sekretariat Badan Penanggulangan Bencana</option>
                        <option value="Dinas Tenaga Kerja dan Transmigrasi">Dinas Tenaga Kerja dan Transmigrasi</option>
                        <option value="Dinas Pemberdayaan Perempuan">Dinas Pemberdayaan Perempuan</option>
                        <option value="Dinas Lingkungan Hidup dan Kehutanan">Dinas Lingkungan Hidup dan Kehutanan</option>
                        <option value="Dinas Ketahanan Pangan">Dinas Ketahanan Pangan</option>
                        <option value="Dinas Pemberdayaan Masyarakat">Dinas Pemberdayaan Masyarakat</option>
                        <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                        <option value="Dinas Komunikasi dan Informatika">Dinas Komunikasi dan Informatika</option>
                        <option value="Dinas Koperasi">Dinas Koperasi</option>
                        <option value="Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                        <option value="Dinas Kepemudaan">Dinas Kepemudaan</option>
                        <option value="Dinas Kearsipan dan Perpustakaan">Dinas Kearsipan dan Perpustakaan</option>
                        <option value="Dinas Kelautan dan Perikanan">Dinas Kelautan dan Perikanan</option>
                        <option value="Dinas Pertanian dan Perkebunan">Dinas Pertanian dan Perkebunan</option>
                        <option value="Dinas Peternakan dan Kesehatan Hewan">Dinas Peternakan dan Kesehatan Hewan</option>
                        <option value="Dinas Energi dan Sumber Daya Mineral">Dinas Energi dan Sumber Daya Mineral</option>
                        <option value="Dinas Perindustrian dan Perdagangan">Dinas Perindustrian dan Perdagangan</option>
                        <option value="Biro Infrastruktur dan SDA">Biro Infrastruktur dan SDA</option>
                        <option value="Biro Hukum">Biro Hukum</option>
                        <option value="Biro Administrasi Pembangunan Daerah">Biro Administrasi Pembangunan Daerah</option>
                        <option value="Biro Perekonomian Daerah">Biro Perekonomian Daerah</option>
                        <option value="Biro Kesejahteraan Rakyat">Biro Kesejahteraan Rakyat</option>
                        <option value="Biro Organisasi">Biro Organisasi</option>
                        <option value="Biro Umum">Biro Umum</option>
                        <option value="Biro Pemerintahan">Biro Pemerintahan</option>
                        <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                        <option value="Inspektorat">Inspektorat</option>
                        <option value="Badan Perencanaan Pembangunan">Badan Perencanaan Pembangunan</option>
                        <option value="Badan Pengelola Pendapatan Daerah">Badan Pengelola Pendapatan Daerah</option>
                        <option value="Badan Pengelola Keuangan dan Aset Daerah">Badan Pengelola Keuangan dan Aset Daerah</option>
                        <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                        <option value="Badan Pengembangan Sumber Daya Manusia Daerah">Badan Pengembangan Sumber Daya Manusia Daerah</option>
                        <option value="Badan Penghubung">Badan Penghubung</option>                                  
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi_hosting" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="lokasi_hosting">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="domain" class="col-sm-2 col-form-label">Domain</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="domain" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="package" class="col-sm-2 col-form-label">Package</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="package" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="quota" class="col-sm-2 col-form-label">Quota</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="quota" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="10000">1000 M</option>
                        <option value="Unlimited">10000 M</option>
                        <option value="Dll">Unlimited</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="used" class="col-sm-2 col-form-label">Used</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="quota" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="10000">1000 M</option>
                        <option value="Unlimited">10000 M</option>
                        <option value="Dll">Unlimited</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keb_bw" class="col-sm-2 col-form-label">Bandwidth</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="keb_bw" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="psu" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merk" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="telepon" placeholder=" ">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: flex; justify-content: flex-end;">
                  <input type="submit" class="btn btn-info" id="btnShowMsg" value="Save" onClick='showMessage()'/>

                  <a href="datahosting.php" class="fa m-l-7" aria-hidden="true"></a></button>
                  <a href="datahosting.php"><button type="button" class="btn btn-info float-right" style=" margin: 0px 10px;">Back</button></a>
                  <button type="reset" class="btn btn-info">Reset</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script type="text/javascript">
      function showMessage(){
        alert("Data berhasil ditambah");
      }
    </script>

<?php include 'end.php' ?>