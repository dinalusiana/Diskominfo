<?php include '../pages/dashboard.php' ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1>Form Permohonan Izin Akses Pusat Data</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    	<div class="container-fluid">
    		<div class="card card-info">
    			<div class="card-header">
    				<h4 class="card-title">Silahkan isi data Anda!</h4>
    			</div>
    			<form class="form-horizontal" method="POST" action="form6.php">
    				<div class="card-body" style="margin: 5px 15px;">
    					<div class="form-group row" style="font-weight: bold; border-bottom: ridge; margin-bottom: 25px; width: 25%">
    						<?php echo "INFORMASI PEMOHON"; ?>
	    				</div>
    					<div class="form-group row">	
							<label for="nama" class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama">
							</div>
						</div>
						<div class="form-group row">
							<label for="perusahaan" class="col-sm-2 col-form-label">Perusahaan</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="perusahaan">
							</div>
						</div>
    					<div class="form-group row">
    						<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    						<div class="col-sm-10">
    							<input class="form-control" type="text" name="jabatan" placeholder=" ">
    						</div>
    					</div>
    					<div class="form-group row">
							<label for="nama_server" class="col-sm-2 col-form-label">Nama Server</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama_server" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="telp_kantor" class="col-sm-2 col-form-label">Telp. Kantor</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="telp_kantor" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="no_hpo" class="col-sm-2 col-form-label">No. HP</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="no_hp" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="email" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">
								<?php echo "Jenis Kartu Identitas"; ?>
							</label>
							<div class="col-sm-10" style="display: flex; flex-direction: wrap; padding: 10px 0;">
								<div class="col-sm-6" style="max-width: 20%">
									<td><input type="radio" name="jawaban" value="KTP" checked /> KTP</td>
				                	<br>
				                    <td><input type="radio" name="jawaban" value="SIM" checked /> SIM</td>
				                <br>
				            	</div>
				            	<div class="col-sm-6" style="max-width: 80%">
				                    <td><input type="radio" name="jawaban" value="Passport" checked /> Passport</td>
				                	<br>
				                    <td><input type="radio" name="jawaban" value="Dan lain-lain" checked /> Dll</td>
				                    <input class="form-control" type="text" name="sebutkan" placeholder="Dll sebutkan...">
								</div>								
							</div>
						</div>
						<div class="form-group row">
							<label for="no_kartu" class="col-sm-2 col-form-label">No Kartu</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="no_kartu" placeholder=" ">
							</div>
						</div><br>
						<div class="form-group row" style="font-weight: bold; border-bottom: ridge; margin-bottom: 25px; width: 25%">
    						<?php echo "RINCIAN PERMOHONAN"; ?>
	    				</div>
						<div class="form-group row">
							<label for="noc" class="col-sm-2 col-form-label">Tanggal</label>
								<div class="col-sm-10">
									<input class="form-control" type="date" name="tanggal" placeholder=" ">
								</div>
						</div>
						<div class="form-group row">
							<label for="waktu_datang" class="col-sm-2 col-form-label">Waktu Datang</label>
							<div class="col-sm-10">
								<input class="form-control" type="time" name="waktu_datang" placeholder=" ">
							</div>
						</div>
						<div class="form-group row">
							<label for="waktu_meninggalkan" class="col-sm-2 col-form-label">Waktu Meninggalkan</label>
							<div class="col-sm-10" style="padding-top: 12px;">
								<input class="form-control" type="time" name="waktu_meninggalkan" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
	    					<label for="no_rak" class="col-sm-2 col-form-label">No Rak
	    					</label>
	    					<div class="col-sm-10">
	    						<input class="form-control" type="text" name="no_rak" placeholder=" ">
	    					</div>
	    				</div>
	    				<div class="form-group row">
							<label class="col-sm-2 col-form-label">
								<?php echo "Aktifitas :"; ?> 
							</label>
							<div class="col-sm-10" style="display: flex; flex-direction: wrap; padding: 10px 0;">
								<div class="col-sm-6" style="max-width: 30%">
									<td><input type="radio" name="jawaban1" value="Pemasangan" checked /> Pemasangan</td>
				                	<br>
				                    <td><input type="radio" name="jawaban1" value="Perawatan" checked /> Perawatan</td>
				                    <br>
                    				<td><input type="radio" name="jawaban1" value="Pembongkaran" checked /> Pembongkaran</td>
				                	<br>
				            	</div>
				            	<div class="col-sm-6" style="max-width: 70%">
				                    <td><input type="radio" name="jawaban1" value="Perbaikan" checked /> Perbaikan</td>
					                <br>
					                    <td><input type="radio" name="jawaban1" value="Setup" checked /> Setup</td>
					                <br>
					                    <td><input type="radio" name="jawaban1" value="Dan lain-lain" checked /> Dll</td>
				                    <input class="form-control" type="text" name="sebutkan1" placeholder="Dll sebutkan...">
								</div>								
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="kartu_akses" class="col-sm-2 col-form-label">No Kartu Akses</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="kartu_akses" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label for="letak_server1" class="col-sm-2 col-form-label">Lokasi Server</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="letak_server1" placeholder=" ">
							</div>
	    				</div>
	    				<div class="form-group row">
							<label class="col-sm-2 col-form-label">
								<?php echo "Izin Pengambilan Gambar"; ?>
							</label>
							<div class="col-sm-10" style="display: flex; flex-direction: wrap; padding: 30px 0;">
								<div class="col-sm-6" style="max-width: 20%">
									<input type="radio" name="jawaban2" value="Ya" checked />Ya</br>
								</div>
								<div class="col-sm-6" style="max-width: 20%; ">
				                    <input type="radio" name="jawaban2" value="Tidak" checked />Tidak</br>
								</div>
							</div>
						</div>
	    				<div class="form-group row">
							<label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="catatan" placeholder=" ">
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