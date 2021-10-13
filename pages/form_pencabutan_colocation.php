<?php include '../pages/dashboard.php' ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1>Form Pencabutan Colocation</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    	<div class="container-fluid">
    		<div class="card card-info">
    			<div class="card-header">
    				<h4 class="card-title">Silahkan isi data Anda!</h4>
    			</div>
    			<form class="form-horizontal" method="POST" action="form3.php">
    				<div class="card-body" style="margin: 5px 15px;">
    					<div class="form-group row">	
							<label for="nama_domain" class="col-sm-2 col-form-label">Nama Domain</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_domain">
							</div>
						</div>
						<div class="form-group row" style="font-weight: margin-bottom: 25px;">
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
    						<?php echo "Telah Mengajukan Permohonan Penarikan Co-Location"; ?> 
    						</div>
	    				</div><br>
	    				<div class="form-group row" style="font-weight: bold; border-bottom: ridge; margin-bottom: 25px; width: 15%">
    						<?php echo "DATA CENTER"; ?>
	    				</div>
						<div class="form-group row">
							<label for="noc" class="col-sm-2 col-form-label">NOC</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="noc">
							</div>
						</div>
    					<div class="form-group row">
    						<label for="letak_server" class="col-sm-2 col-form-label">Letak Server</label>
    						<div class="col-sm-10">
    							<input class="form-control" type="text" name="letak_server" placeholder=" ">
    						</div>
    					</div>
    					<div class="form-group row">
							<label for="nama_domain1" class="col-sm-2 col-form-label">Nama Domain</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_domain1" placeholder=" ">
							</div>
						</div><br>
						<div class="form-group row" style="font-weight: bold; border-bottom: ridge; margin-bottom: 25px; width: 15%">
    						<?php echo "CO-LOCATION"; ?>
	    				</div>
						<div class="form-group row">
							<label for="noc1" class="col-sm-2 col-form-label">NOC</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="noc1" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="letak_server1" class="col-sm-2 col-form-label">Letak Server</label>
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
							<label for="pertimbangan" class="col-sm-2 col-form-label">Pertimbangan</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="pertimbangan">
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