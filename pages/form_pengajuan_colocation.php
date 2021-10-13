<?php include '../pages/dashboard.php' ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pengajuan Colocation</h1>
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
    			<form class="form-horizontal" method="POST" action="form1.php">
    				<div class="card-body" style="margin: 10px 20px;">
    					<div class="form-group row">					
							<label for="nama_unit" class="col-sm-2 col-form-label">Nama Unit</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_unit">
							</div>
						</div>
    					<div class="form-group row">
    						<label for="penanggung_jawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
    						<div class="col-sm-10" style="padding-top: 12px;">
    							<input class="form-control" type="text" name="penanggung_jawab">
    						</div>
    					</div>
    					<div class="form-group row">
							<label for="nip" class="col-sm-2 col-form-label">NIP</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nip" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat_unit" class="col-sm-2 col-form-label">Alamat Unit</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="alamat_unit" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="kontak" placeholder=" ">
								</div>
						</div>
						<div class="form-group row">
							<label for="nama_domain" class="col-sm-2 col-form-label">Nama Domain</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_domain" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="tanggal_aktif" class="col-sm-2 col-form-label">Tanggal Aktif Domain</label>
							<div class="col-sm-10" style="padding-top: 12px;">
								<input class="form-control" type="date" name="tanggal_aktif" placeholder=" ">
							</div>
	    				</div>
	    				<br>
			                <?php echo "(*)Masa Berlaku"; ?> 
			            <br>
			            <br>
						<div class="form-group row">
							<label class="col-sm-2">Co-Location :</label>
							<div class="col-sm-10">
								<tr>
			                    	<td><input type="radio" name="co_location" value="Permanen" checked />Permanen</td>
			                	</tr><span style="margin-right: 15px;"></span>
			                	<tr>
			                    	<td><input type="radio" name="co_location" value="Tidak Permanen" checked />Tidak permanen</td>
			                	</tr>
							</div>
						</div>
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