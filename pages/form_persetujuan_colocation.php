<?php include '../pages/dashboard.php' ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Persetujuan Colocation</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    	<div class="container-fluid">
    		<div class="card card-info">
    			<div class="card-header">
    				<h4 class="card-title">Silahkan isi data Anda!</h4>
    			</div>
    			<form class="form-horizontal" method="POST" action="form2.php">
    				<div class="card-body" style="margin: 10px 15px;">
    					<div class="form-group row">					
							<label for="nama_domain" class="col-sm-2 col-form-label">Nama Domain</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_domain">
							</div>
						</div>
    					<div class="form-group row">
    						<label class="col-sm-2"></label>
    						<div class="col-sm-10">
    							<tr>
				                    <td><input type="radio" name="jawaban" value="Menyetujui" checked />menyetujui</td>
				                </tr>
				                <tr>
				                    <td><input type="radio" name="jawaban" value="Menolak" checked />Menolak</td>
				                </tr>
								<br>
    						</div>
    					</div>
    					<div class="form-group row">
							<label for="permohonan" class="col-sm-2 col-form-label">Tempat Colocation</label>
							<div class="col-sm-10" style="padding-top: 12px;">
								<input class="form-control" type="text" name="permohonan">
							</div>
						</div>
						<div class="form-group row">
							<label for="pertimbangan" class="col-sm-2 col-form-label">Pertimbangan</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="pertimbangan" placeholder="Diisi jika telah disetujui">
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-sm-2" style="border-bottom: ridge;">
								<?php echo "DATA CENTER"; ?>
							</label>
						</div>
						<div class="form-group row">
							<label for="noc" class="col-sm-2 col-form-label">NOC</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="noc">
								</div>
						</div>
						<div class="form-group row">
							<label for="letak_server" class="col-sm-2 col-form-label">Lokasi Server</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="letak_server" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="nama_domain1" class="col-sm-2 col-form-label">Nama Domain</label>
							<div class="col-sm-10"">
								<input class="form-control" type="text" name="nama_domain1" placeholder=" ">
							</div>
	    				</div><br>
	    				<div class="form-group row">
	    					<label class="col-sm-2" style="border-bottom: ridge;">
	    						<?php echo "CO-LOCATION"; ?> 
	    					</label>
	    				</div>
	    				<div class="form-group row">
							<label for="co_location" class="col-sm-2 col-form-label">Colocation</label>
							<div class="col-sm-10"">
								<input class="form-control" type="text" name="co_location" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="noc1" class="col-sm-2 col-form-label">NOC</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="noc1" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="letak_server1" class="col-sm-2 col-form-label">Lokasi Server</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="letak_server1" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="sn_server" class="col-sm-2 col-form-label">S/N Server</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="sn_server" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="type_merk" class="col-sm-2 col-form-label">Type & Merk</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="type_merk" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="nama_domain2" class="col-sm-2 col-form-label">Nama Domain</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_domain2" placeholder=" ">
							</div>
	    				</div><br>
	    				<div class="form-group row">
	    					<label class="col-sm-2" style="border-bottom: ridge;">
	    						<?php echo "HOST ADMIN"; ?> 
	    					</label>
	    				</div>
	    				<div class="form-group row">
							<label for="host" class="col-sm-2 col-form-label">User</label>
							<div class="col-sm-10"">
								<input class="form-control" type="text" name="host" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="password" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10"">
								<input class="form-control" type="text" name="password" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="co_location" class="col-sm-2 col-form-label">IP Address</label>
							<div class="col-sm-10"">
								<input class="form-control" type="text" name="ip_address" placeholder=" ">
							</div>
	    				</div><br>
						<div class="form-group row" style="justify-content: flex-end;">
							<input type="submit" value="Print" name="submit" data-bs-hover-animate="pulse" class="btn btn-primary" style="margin-right: 15px;" />
							<input type="reset" value="Reset"class="btn btn-primary"/>
						</div>
	    			</div>
    			</form>
    		</div>
    	</div>
    </section>

<?php include '../pages/end.php' ?>