<?php include '../pages/dashboard.php' ?>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en"> -->
<head>
	<title>Form Pengajuan Colocation</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="-6.995201" data-map-y="110.418385" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/9.jpg);">
				<span class="contact100-form-title-1">
					Formulir Pengajuan Colocation
				</span>

				<span class="contact100-form-title-2">
					Dinas Komunikasi dan Informatika Provinsi Jawa Tengah 2019
				</span>
			</div>


           

			<form class="contact100-form validate-form" method="POST" action="../form1.php">
				<div class="wrap-input100 validate-input" data-validate = " ">
					<div class="form-group">
						
					<span class="label-input100">Nama Unit :</span>
					<input class="form-control" type="text" name="nama_unit">
					<!-- <span class="focus-input100"></span> -->
					
				</div>

				<div class="wrap-input100 validate-input" data-validate = " ">
					<div class="form-group">
					<span class="label-input100">Penanggung Jawab :</span>
					<input class="form-control" type="text" name="penanggung_jawab">
					<!-- <span class="focus-input100"></span> -->
					
				</div>

				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">NIP :</span>
					<input class="form-control" type="text" name="nip" placeholder=" ">
					<!--<span class="focus-input100"></span>-->
				</div>

				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Alamat Unit :</span>
					<input class="form-control" type="text" name="alamat_unit" placeholder=" ">
					<!--<span class="focus-input100"></span>-->
				</div>

				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Kontak Number :</span>
					<input class="form-control" type="text" name="kontak" placeholder=" ">
					<!--<span class="focus-input100"></span>-->
				</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Nama Domain :</span>
					<input class="form-control" type="text" name="nama_domain" placeholder=" ">
					<!--<span class="focus-input100"></span>-->

					<!--<select class="form-control" type="text" name="nama_domain" style="width: 100%">
						<option selected disabled value="">---</option>
						<option value="2">2</option><option value="4">4</option><option value="16">16</option>
						<option value="32">32</option><option value="64">64</option><option value="128">128</option>
							</select>-->
				</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">tanggal Aktif Domain :</span>
					<input class="form-control" type="date" name="tanggal_aktif" placeholder=" ">
					<!--<span class="focus-input100"></span>-->
					<!--select class="form-control" type="text" name="tanggal_aktif" style="width: 100%">
						<option selected disabled value="">---</option>
						<option value="50">50</option>
						<option value="100">100</option>
						<option value="400">400</option>
						<option value="500">500</option>
						<option value="1000">1000</option>
						<option value="2000">2000</option>
						<option value="3000">3000</option>
							</select>-->
				<br>
                <?php echo "(*)Masa Berlaku"; ?> 
                <br>
                </div>
				<div class="wrap-input100 validate-input" data-validate="">
					<div class="form-group">
					<span class="label-input100">Co-Location :</span>
					<!-- <input class="form-control" type="text" name="co_location" placeholder=" "> -->
                <tr>
                    <td><input type="radio" name="co_location" value="Permanen" checked />Permanen</td>
                </tr>
                <tr>
                    <td><input type="radio" name="co_location" value="Tidak Permanen" checked />Tidak permanen</td>
                </tr>
					<!--<span class="focus-input100"></span>-->
				</div>
				<!--<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Merk :</span>
					<input class="form-control" type="text" name="merk" placeholder=" ">-->
					<!--<span class="focus-input100"></span>-->
				<!--</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">No Serial :</span>
					<input class="form-control" type="text" name="serial_number" placeholder=" ">-->
					<!--<span class="focus-input100"></span>-->
				<!--</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Location :</span>
					<input class="form-control" type="text" name="location" placeholder=" ">-->
					<!--<span class="focus-input100"></span>-->
				<!--</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Type Server :</span>
					<input class="form-control" type="text" name="type_server" placeholder=" ">-->
					<!--<span class="focus-input100"></span>-->
				<!--</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Allocation :</span>
					<input class="form-control" type="text" name="allocation" placeholder=" ">--
					<!--<span class="focus-input100"></span>-->
				<!--</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Keterangan :</span>
					<input class="form-control" type="text" name="keterangan" placeholder=" ">-->
					<!--<span class="focus-input100"></span>-->
				<!--</div>
				<div class="wrap-input100 validate-input" data-validate=" ">
					<div class="form-group">
					<span class="label-input100">Tanggal Pemasangan:</span>
					<input class="form-control" type="date" name="tgl_pemasangan" placeholder=" ">-->
					<!--<span class="focus-input100"></span>
				</div>-->

		<center>	
		<!-- <a href="form1.php"><button class="btn btn-primary " data-bs-hover-animate="pulse" id="button1" type="submit" nama="submit"><span><strong>Print</strong></span></button></a> -->
		<input type="submit" value="Print" name="submit" data-bs-hover-animate="pulse" class="btn btn-primary" />
		<a href="masuk.php"><button class="btn btn-primary " data-bs-hover-animate="pulse" id="button1" type="button"><span>Exit</span></button></a>
        
				<!--<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Simpan
							<a class="fa m-l-7" aria-hidden="true"></a>
						</span>
					</button>
				</div>-->
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

<!-- </body>
</html> -->

<?php include '../pages/end.php' ?>