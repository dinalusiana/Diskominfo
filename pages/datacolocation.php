<?php include 'dashboard.php' ?>

<style>
    .card-body1{
        overflow: scroll;
        -ms-overflow-style: none;
    }
    .card-body1::-webkit-scrollbar {
        display: none;
    }
    .table{
        width: 100%;
        margin-top: 5px;
        border-collapse: collapse;
    }
    .table th, .table td{
        border: 1px solid #7E8F9F;
        padding: 12px;
        font-family: arial;
    }
    .table th{
        font-size: 12px;
        background: #3196C5;
        color: #DDE6F9;
    }
    .table td{
        background: #E3E9EE;
        padding: 10px 5px;
        font-size: 12px;
        color: #000000;
    }
    .main-header{
        padding: 15px;
        font-family: arial;
        color: #000000;
    }
    .kolom{
        padding: 0 15px;
        display: flex;
        flex-direction: wrap;
        /*box-sizing: border-box;*/
    }
    button[type=button]{
        margin: 1.5px;
        padding: 1px 8px;
    }
    .fa{
        justify-content: center;
        font-size: 15px;
    }
    .container {
      padding: 16px;
      background: #FFFFFF;
      border-radius: 15px;
    }
    h3,p{
        margin: 2px 0;
    }
    p{
        margin-bottom: 20px;
        font-size: 15px;
    }
    .wrap-input100{
        justify-content: center;
    }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h2 class="m-0 text-dark">DATA CO-LOCATION SERVER</h2>
        </div>
         <div class="row mb-2">
            <h5 class="m-0 text-dark">Dinas Komunikasi dan Informatika Provinsi Jawa Tengah</h5>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- Card Header -->
                    <div class="card-header">
                        <div class="row mb-2">
                            <!-- Button Add -->
                            <div class="col-sm-6">
                                <a href="formcolocation.php" class="btn btn-info" title="Add">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <!-- Button Search -->
                            <div class="col-sm-6" style="display: flex; justify-content: flex-end;"> 
                                <form class="form-inline ml-3" action="datacolocation.php">
                                  <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search..." aria-label="Search" name="cari">
                                    <div class="input-group-append"> 
                                      <button class="btn btn-info" type="submit">
                                        <i class="fas fa-search"></i>
                                      </button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                    <!-- /.card-header -->

                    <!-- Card Tabel -->
                    <div class="card-body" style="padding-top: 10px;">
                        <center><h5 style="color: grey; margin:0px;"><<--Geser jika tabel terpotong-->></h5></center>
                        <div class="card-body1">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>PILIHAN</th>
                                <th>OPD/INSTANSI</th>
                                <th>IP</th>
                                <th>NAMA SERVER</th>
                                <th>OS</th>
                                <th>PROSESOR</th>
                                <th>RAM(GB)</th>
                                <th>STORAGE(GB)</th>
                                <th>PSU</th>
                                <th>MERK</th>
                                <th>SERIAL NUMBER</th>
                                <th>LOCATION</th>
                                <th>TYPE SERVER</th>
                                <th>ALLOCATION</th>
                                <th>KETERANGAN</th>
                                <th>TANGGAL PEMASANGAN</th>
                            </tr>
                            </thead>
                            <tbody> 
                                <?php
                                    include "../db/koneksi2.php";
                                        if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            $query = "select * from colocation where instansi like '%".$cari."%'";          
                                        }else{
                                            $query = "SELECT * from colocation";        
                                        }
                                            
                                        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

                                        while ($row = mysqli_fetch_array($result)) {
                                ?>

                                <tr>
                                    <td style="text-align:center; vertical-align: middle;">
                                        <div class="btn-group" role="group">
                                            <!-- <a href="">
                                                <button class="btn btn-info" type="button" title="Details">
                                                    <i class="fa fa-info"></i></button>
                                            </a> -->
                                            <a href='edit_colocation.php?id=<?php echo $row['no']; ?>'>
                                                <button class="btn btn-success" type="button" title="Edit">
                                                    <i class="fa fa-edit"></i></button>
                                            </a>
                                            <a  href='../db/hapuscolocation.php?id=<?php echo $row['no']; ?>'>
                                                <button class="btn btn-danger" type="button" title="Delete" id="btnShowMsg" value="delete" onClick='showMessage()'/>
                                                    <i class="fa fa-trash"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                    <td style="text-align:left;"><?php echo $row['instansi']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['ip']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['nama_server']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['os']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['prosesor']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['ram']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['storage']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['psu']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['merk']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['serial_number']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['location']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['type_server']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['allocation']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['keterangan']; ?></td>
                                    <td style="text-align:left;"><?php echo $row['tgl_pemasangan']; ?></td>
                                </tr>
                                
                                <?php
                                }
                                ?>
                                
                                <!-- <center>
                                   <div class="card-body" width="100%" height="100%"><a class="card-link" href="home1.php"><button class="btn btn-primary btn-info"><i class="fa fa-times "></i>&nbsp;Exit</button></a>
                                </center> -->
                            </tbody>
                          </table>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- page script -->
<!-- <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script type="text/javascript">
            function showMessage(){
                alert("Data telah dihapus");
            }
        </script>

<?php include 'end.php' ?>
