<?php include 'dashboard.php' ?>

<?php
//isikan dengan query select data
include "../db/koneksi2.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "select * from colocation where no='$id'") or die(mysqli_error($connect));

while ($res = mysqli_fetch_array($query)) {
    $instansi   = $res['instansi'];
    $ip  = $res['ip'];
    $nama_server   = $res['nama_server'];
    $os   = $res['os'];
    $prosesor  = $res['prosesor'];
    $ram   = $res['ram'];
    $storage  = $res['storage'];
    $psu   = $res['psu']; 
    $merk   = $res['merk'];
    $serial_number   = $res['serial_number'];
    $location   = $res['location'];
    $type_server   = $res['type_server'];
    $allocation   = $res['allocation'];
    $keterangan   = $res['keterangan'];
    $tgl_pemasangan  = $res['tgl_pemasangan'];
    
}
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Co-location Server</h1>
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
              <form class="form-horizontal" action="../db/aksi_editcolocation.php?no=<?php echo $id; ?>" method='post'>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="instansi" class="col-sm-2 col-form-label">OPD/Instansi</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $instansi; ?>" class="form-control" type="text" name="instansi" value="<?php echo $row['instansi']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ip" class="col-sm-2 col-form-label">IP</label>
                    <div class="col-sm-10">
                     <input value="<?php echo $ip; ?>" class="form-control" type="text" name='ip' value="<?php echo $row['ip']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_server" class="col-sm-2 col-form-label">Nama Server</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $nama_server; ?>" class="form-control" type="text" name='nama_server' value="<?php echo $row['nama_server']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="os" class="col-sm-2 col-form-label">OS</label>
                    <div class="col-sm-10">
                      <!-- <select class="form-control" type="text" name="os" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="Proxmox">Proxmox</option>
                        <option value="Unix/Linux">Unix/Linux</option>
                        <option value="CentOS">CentOS</option>
                        <option value="Centos 7">Centos 7</option>
                        <option value="Linux">Linux</option>
                        <option value="Proxmax 7">Proxmox 7</option>
                        <option value="Centos 6,8">Centos 6,8</option>
                      </select> -->
                      <input value="<?php echo $os; ?>" class="form-control" type="text" name="os" value="<?php echo $row['os']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosesor" class="col-sm-2 col-form-label">Prosesor</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $prosesor; ?>" class="form-control" type="text" name='prosesor' value="<?php echo $row['prosesor']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ram" class="col-sm-2 col-form-label">RAM (GB)</label>
                    <div class="col-sm-10">
                     <!--  <select class="form-control" type="text" name="ram" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                        <option value="32">32</option>
                        <option value="64">64</option>
                        <option value="128">128</option>
                      </select> -->
                      <input value="<?php echo $ram; ?>" class="form-control" type="text" name="ram" value="<?php echo $row['ram']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="storage" class="col-sm-2 col-form-label">Storage (GB)</label>
                    <div class="col-sm-10">
                      <!-- <select class="form-control" type="text" name="storage" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="300">300</option>
                        <option value="438">438</option>
                        <option value="600">600</option>
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="3600">3600</option>
                        <option value="8000">8000</option>
                      </select> -->
                      <input value="<?php echo $storage; ?>" class="form-control" type="text" name="storage" value="<?php echo $row['storage']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="psu" class="col-sm-2 col-form-label">PSU</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $psu; ?>" class="form-control" type="text" name='psu' value="<?php echo $row['psu']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $merk; ?>" class="form-control" type="text" name='merk' value="<?php echo $row['merk']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="serial_number" class="col-sm-2 col-form-label">No Serial</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $serial_number; ?>" class="form-control" type="text" name='serial_number' value="<?php echo $row['serial_number']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prosesor" class="col-sm-2 col-form-label">Location (Rack)</label>
                    <div class="col-sm-10">
                      <!-- <select class="form-control" type="text" name="location" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="300">1</option>
                        <option value="438">2</option>
                        <option value="600">3</option>
                        <option value="1000">4</option>
                        <option value="1200">5</option>
                        <option value="3600">6</option>
                      </select> -->
                      <input value="<?php echo $location; ?>" class="form-control" type="text" name='location' value="<?php echo $row['location']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type_server" class="col-sm-2 col-form-label">Type Server</label>
                    <div class="col-sm-10">
                      <!-- <select class="form-control" type="text" name="type_server" style="width: 100%">
                        <option value="Rack Mount">Rack Mount</option>
                      </select> -->
                      <input value="<?php echo $type_server; ?>" class="form-control" type="text" name='type_server' value="<?php echo $row['type_server']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="allocation" class="col-sm-2 col-form-label">Alocation</label>
                    <div class="col-sm-10">
                      <!-- <select class="form-control" type="text" name="allocation" style="width: 100%">
                        <option selected disabled value="">-Pilih-</option>
                        <option value="1u">1u</option>
                        <option value="2u">2u</option>
                        <option value="3u">3u</option>
                      </select> -->
                      <input value="<?php echo $allocation; ?>"class="form-control" type="text" name='allocation' value="<?php echo $row['allocation']; ?>"  placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <!-- <select class="form-control" type="text" name="keterangan" style="width: 100%">
                        <option value="Normal">Normal</option>
                      </select> -->
                      <input value="<?php echo $keterangan; ?>" class="form-control" type="text" name='keterangan' value="<?php echo $row['keterangan']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tgl_pemasangan" class="col-sm-2 col-form-label">Tanggal Pemasangan</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $tgl_pemasangan; ?>" class="form-control" type="date" name='tgl_pemasangan' value="<?php echo $tgl_pemasangan; ?>" placeholder=" ">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: flex; justify-content: flex-end;">
                  <button type="submit" class="btn btn-info">Update<a href="datacolocation.php" class="fa m-l-7" aria-hidden="true""></a></button>
                  <a href="datacolocation.php"><button type="button" class="btn btn-info float-right" style=" margin: 0px 10px;">Back</button></a>
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

<?php include 'end.php' ?>