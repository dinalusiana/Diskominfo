<?php include 'dashboard.php' ?>

<?php
//isikan dengan query select data
include "../db/koneksi2.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "select * from hosting where nama_opd='$id'") or die(mysqli_error($connect));

while ($res = mysqli_fetch_array($query)) {
    $nama_opd  = $res['nama_opd'];
    $lokasi_hosting  = $res['lokasi_hosting'];
    $domain   = $res['domain'];
    $package   = $res['package'];
    $quota  = $res['quota'];
    $used   = $res['used'];
    $keb_bw  = $res['keb_bw'];
    $nama   = $res['nama']; 
    $telepon   = $res['telepon'];
    
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Hosting</h1>
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
              <form class="form-horizontal" action="../db/aksi_edithosting.php?no=<?php echo  $id;  ?>" method='post'>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_opd" class="col-sm-2 col-form-label">Nama OPD</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $nama_opd; ?>" class="form-control" type="text" name='nama_opd' value="<?php echo $row['nama_opd']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi_hosting" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $lokasi_hosting; ?>" class="form-control" type="text" name='lokasi_hosting' value="<?php echo $row['lokasi_hosting']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="domain" class="col-sm-2 col-form-label">Domain</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $domain; ?>" type="text" class="form-control" type="text" name='domain' value="<?php echo $row['domain']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="package" class="col-sm-2 col-form-label">Package</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $package; ?>" class="form-control" type="text" name='package' value="<?php echo $row['package']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="quota" class="col-sm-2 col-form-label">Quota</label>
                    <div class="col-sm-10">
                     <input value="<?php echo $quota; ?>" class="form-control" type="text" name="quota" value="<?php echo $row['quota']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="used" class="col-sm-2 col-form-label">Used</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $used; ?>" class="form-control" type="text" name="used" value="<?php echo $row['used']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keb_bw" class="col-sm-2 col-form-label">Bandwidth</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $keb_bw; ?>" class="form-control" type="text" name="keb_bw" value="<?php echo $row['keb_bw']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="psu" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $nama; ?>" class="form-control" type="text" name="nama" value="<?php echo $row['nama']; ?>" placeholder=" ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merk" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                      <input value="<?php echo $telepon; ?>" class="form-control" type="text" name="telepon" value="<?php echo $row['telepon']; ?>" placeholder=" ">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" style="display: flex; justify-content: flex-end;">
                  <button type="submit" class="btn btn-info">Update<i class="fa m-l-7" aria-hidden="true"></i></button>
                  <a href="datahosting.php"><button type="button" class="btn btn-info float-right" style=" margin: 0px 10px;">Back</button>
                  <button type="reset" class="btn btn-info">Reset</button></a>
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