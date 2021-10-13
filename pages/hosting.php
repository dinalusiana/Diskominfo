<?php
include "dashboard.php"
?>
<style> 
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
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: scroll; /* Enable scroll if needed */
    /*background-color: transparent;*/
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4);
    padding-top: 20px;
}
.modal::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
.modal {
   -ms-overflow-style: none;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #A1A1A1;
}
.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}
/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
.top{
    display: flex;
    flex-direction: wrap;
}
.judul{
    margin-top: 10px;
    color: #000000;
    font-family: sans-serif;
    border-bottom: double #B0AEAE;
    /*background-color: #BCD7F8;*/
}
h3,p{
    margin: 2px 0;
}
p{
    margin-bottom: 20px;
    font-size: 15px;
}
.form-content{
    width: 100%;
    height: 100%;
    padding: 10px 100px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.wrap-input100{
    justify-content: center;
}
input:focus, select:focus{
    background-color: #C6C5C5;
    color: #000000;
}
.label-input100{
    font-family: sans-serif;
    font-size: 15px;
    color: #000000;
    text-align: left;
    padding: 10px 2px;
</style>

        </head>
            <header class="main-header">
                <h3 class="blog-title">HOSTING OPD PROFINSI JAWA TENGAH</h3>
                <h5 class="blog-title">Dinas Komunikasi dan Informatika Provinsi Jawa Tengah</h5>
            </header>

            <body style="background-color : #fafafa;"><br>
                <div class="kolom">
                    <div class="card-body">
                        <button class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                          <i class="fa fa-plus"></i>
                            &nbsp; Add
                        </button>
                        <div id="id01" class="modal">
                            <form class="modal-content" action="tabel2.php">
                                <div class="container">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
                                    <div class="judul">
                                        <div><img src="images/Asset10.png" style="float:left; margin:0 5px; width: 70px; height: 70px;">
                                            <span>
                                                <h3>Form Hosting Data Center</h3>
                                                <p>Dinas Komunikasi dan Informatika Provinsi Jawa Tengah</p>
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="form-content">
                                        <form class="contact100-form validate-form" action="aksi_indexhosting.php" method='post'>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Nama OPD :</span>
                                                <div class="form-group">
                                                   <input class="form-control" type="text" name="nama_opd">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate = " ">
                                                <span class="label-input100">Lokasi :</span>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="lokasi_hosting">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Domain :</span>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="domain" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Package :</span>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="package" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Quota :</span>
                                                <div class="form-group">
                                                    <select class="form-control" type="text" name="quota" style="width: 100%">
                                                        <option selected disabled value="">-Pilih-</option>
                                                        <option value="10000">1000 M</option>
                                                        <option value="Unlimited">10000 M</option>
                                                        <option value="Dll">Unlimited</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Used :</span>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="used" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Bandwidth :</span>
                                                <div class="form-group">
                                                   <input class="form-control" type="text" name="keb_bw" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate="">
                                                <span class="label-input100">Nama :</span>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="nama" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate=" ">
                                                <span class="label-input100">Telepon :</span>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="telepon" placeholder=" ">
                                                </div>
                                            </div>
                                            <div style="float: right;">
                                                <button class="btn btn-primary">
                                                    <span>Save
                                                        <a href="tabel2.php" class="fa m-l-7" aria-hidden="true"></a>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                      <form class="form-inline ml-3" action="tabel2.php">
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

                <center>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">                            
                        <table class="table dataTable my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Nama OPD</th>
                                    <th style="text-align:center;">Lokasi Hosting</th>
                                    <th style="text-align:center;">Nama Domain</th>
                                    <th style="text-align:center;">Package</th>
                                    <th style="text-align:center;">Quota </th>
                                    <th style="text-align:center;">Used</th>
                                    <th style="text-align:center;">Kebutuhan Bandwidth</th>
                                    <th style="text-align:center;">Nama PIC</th>
                                    <th style="text-align:center;">Telepon</th>
                                    <th style="text-align:center;">Pilihan</th>
                                </tr>
                            </thead>
                        
                        <tbody>
                            <?php
                                include "koneksi2.php";
                                    if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $query = "select * from hosting where nama_opd like '%".$cari."%'";			
                                    }else{
                                        $query = "SELECT * from hosting";		
                                    }
                                                        
                                    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

                                    while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <td style="text-align:left;"><?php echo $row['nama_opd']; ?></td>
                                <td style="text-align:left;"><?php echo $row['lokasi_hosting']; ?></td>
                                <td style="text-align:left;"><?php echo $row['domain']; ?></td>
                                <td style="text-align:left;"><?php echo $row['package']; ?></td>
                                <td style="text-align:left;"><?php echo $row['quota']; ?></td>
                                <td style="text-align:left;"><?php echo $row['used']; ?></td>
                                <td style="text-align:left;"><?php echo $row['keb_bw']; ?></td>
                                <td style="text-align:left;"><?php echo $row['nama']; ?></td>
                                <td style="text-align:left;"><?php echo $row['telepon']; ?></td>
                                
                                <td style="text-align:center;">
                                    <div class="btn-group" role="group">
                                        <a href='edit_hosting.php?id=<?php echo $row['nama_opd']; ?>'>
                                            <button class="btn btn-success" type="button">
                                                <i class="fa fa-edit"></i></button>
                                        </a>
                                        <a  href='hapushosting.php?id=<?php echo $row['nama_opd']; ?>'>
                                            <button class="btn btn-danger" type="button">
                                                <i class="fa fa-trash"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            
                            <?php
                            }
                            ?>        
                        </tbody>
                        </table>
                    </div>
                </center>
        	
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());

                  gtag('config', 'UA-23581568-13');
                </script>

                <script>
                /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                var dropdown = document.getElementsByClassName("dropdown-btn");
                var i;

                for (i = 0; i < dropdown.length; i++) {
                  dropdown[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var dropdownContent = this.nextElementSibling;
                      if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                      } else {
                        dropdownContent.style.display = "block";
                      }
                  });
                }
                </script> 

                <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
                </script>
            </body>
    </div>
</body>
</html>