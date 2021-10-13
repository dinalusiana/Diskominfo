<?php include 'dashboard.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="padding-top: 10px;">
      <div class="callout callout-info" style="width: 40%;">
          <h5>Haloo <b><?php echo $_SESSION['username']?></b>, </h5>
            <h5 style="margin-bottom:0px;">Welcome to Data Center</h5>
            <p style="font-size: 15px;">Dinas Komunikasi dan Informatika Jawa Tengah</p>
          </div>
      <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
                <!-- Horizontal Form -->
                <div class="card" style="background-color: #FFFFFF; justify-content: center;">
                  <div class="card-header" style="border-bottom: ridge;">
                    <center>
                      <h3 style="margin-bottom: 2px;"><b>RackMount Data Center</b></h3>
                      <p style="margin-bottom: 0; font-size: 20px;"><b>Dinas Komunikasi dan Informatika Jawa Tengah</b></p>
                    </center>
                  </div>
                  <!-- /.card-header -->
                  <?php include 'rak.php' ?>
                </div>
                <!-- /.card -->
          </div><!-- /.container-fluid -->
        </section>
      <!-- /.content -->
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

<?php include 'end.php' ?>