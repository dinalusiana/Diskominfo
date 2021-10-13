<?php include '../pages/dashboard.php' ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1>Form Berita Acara Serah Terima Barang</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    	<div class="container-fluid">
    		<div class="card card-info">
    			<div class="card-header">
    				<h4 class="card-title">Silahkan isi data Anda!</h4>
    			</div>
    			<form class="form-horizontal" method="POST" action="form4.php">
    				<div class="card-body" style="margin: 5px 15px;">
    					<div class="form-group row">	
							<label for="nama_unit" class="col-sm-2 col-form-label">Nama Unit</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_unit">
							</div>
						</div>
						<div class="form-group row">
							<label for="penanggung_jawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="penanggung_jawab">
							</div>
						</div>
    					<div class="form-group row">
    						<label for="nip" class="col-sm-2 col-form-label">NIP</label>
    						<div class="col-sm-10">
    							<input class="form-control" type="text" name="nip" placeholder=" ">
    						</div>
    					</div><br>
    					<div class="form-group row" style="font-weight: bold; border-bottom: ridge; margin-bottom: 25px; width: 25%">
    						<?php echo "KETERANGAN BARANG"; ?>
	    				</div>
	    				<div class="form-group row">
							<label for="nama_barang" class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_barang" placeholder=" ">
							</div>
						</div>
    					<div class="form-group row">
							<label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="jenis" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="tipe" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="jumlah" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="satuan" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="keterangan" placeholder=" ">
							</div>
						</div><br>
						<div class="form-group row" style="font-weight: bold; border-bottom: ridge; margin-bottom: 25px; width: 15%">
    						<?php echo "UNIT TUJUAN"; ?>
	    				</div>
						<div class="form-group row">
							<label for="nama_unit_tujuan" class="col-sm-2 col-form-label">Nama Unit</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" name="nama_unit_tujuan" placeholder=" ">
								</div>
						</div>
						<div class="form-group row">
							<label for="penanggung_jawab_tujuann" class="col-sm-2 col-form-label">Penanggung Jawab</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="penanggung_jawab_tujuan" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="nip_tujuan" class="col-sm-2 col-form-label">NIP</label>
							<div class="col-sm-10" style="padding-top: 12px;">
								<input class="form-control" type="text" name="nip_tujuan" placeholder=" ">
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