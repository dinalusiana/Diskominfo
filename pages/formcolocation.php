<?php include 'dashboard.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Add Data Co-location Server</h1>
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
              <form class="form-horizontal" action="../db/aksi_indexcolocation.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="instansi" class="col-sm-2 col-form-label">OPD/Instansi</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" id="instansi" name="instansi" style="width: 100%" required>             
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
                    <label for="ip" class="col-sm-2 col-form-label">IP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="ip" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_server" class="col-sm-2 col-form-label">Nama Server</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_server" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="os" class="col-sm-2 col-form-label">OS</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="os" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="Proxmox">Proxmox</option>
                        <option value="Unix/Linux">Unix/Linux</option>
                        <option value="CentOS">CentOS</option>
                        <option value="Centos 7">Centos 7</option>
                        <option value="Linux">Linux</option>
                        <option value="Proxmax 7">Proxmox 7</option>
                        <option value="Centos 6,8">Centos 6,8</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosesor" class="col-sm-2 col-form-label">Prosesor</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="prosesor" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ram" class="col-sm-2 col-form-label">RAM (GB)</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="ram" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                        <option value="32">32</option>
                        <option value="64">64</option>
                        <option value="128">128</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="storage" class="col-sm-2 col-form-label">Storage (GB)</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="storage" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="300">300</option>
                        <option value="438">438</option>
                        <option value="600">600</option>
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="3600">3600</option>
                        <option value="8000">8000</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="psu" class="col-sm-2 col-form-label">PSU</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="psu" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="merk" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="serial_number" class="col-sm-2 col-form-label">No Serial</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="serial_number" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosesor" class="col-sm-2 col-form-label">Location (Rack)</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="location" style="width: 100%" required>
                        <option selected disabled value="">-Pilih-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                      <?php echo "*Wajib diisi"; ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type_server" class="col-sm-2 col-form-label">Type Server</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="type_server" style="width: 100%">
                        <option value="Rack Mount">Rack Mount</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="allocation" class="col-sm-2 col-form-label">Alocation</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="allocation" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="1u">1u</option>
                        <option value="2u">2u</option>
                        <option value="3u">3u</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <select class="form-control" type="text" name="keterangan" style="width: 100%">
                        <option value="Normal">Normal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tgl_pemasangan" class="col-sm-2 col-form-label">Tanggal Pemasangan</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tgl_pemasangan" placeholder=" ">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: flex; justify-content: flex-end;">
                  <input type="submit" class="btn btn-info" id="btnShowMsg" value="Save" onClick='showMessage()'/>

                  <a href="datacolocation.php" class="fa m-l-7" aria-hidden="true"></a></button>
                  <a href="datacolocation.php"><button type="button" class="btn btn-info" style=" margin: 0px 10px;">Back</button></a>
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
        alert("Data telah tersimpan");
      }
    </script>

<?php include 'end.php' ?>