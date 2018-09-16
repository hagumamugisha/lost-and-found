<!DOCTYPE html>
<html>
	<head>
		<title>Lost and Found.</title>
		<link rel="stylesheet" type="text/css" href="assets/style/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/less" href="assets/style/style.less">
	</head>
	<body>
		<header></header>
		<div class="container">
			<div class="head">
				<h3></h3>
			</div>
			<form method="get" action="submit_form.php" enctype="multipart/data-form">
				<div class="form-group" id="item-img-container">
					<div class="input-group"	>
						<div class="btn btn-primary" id="btn-img">Upload gambar...</div>
						<div id="item-img-name"></div>
						<input type="file" name="item-img" id="item-img">
					</div>
				</div>
				
				<div class="form-group" id="item-type-container">
					<label for="item-type">Kategori<span>*</span></label>
					<select class="form-control" name="item-type" id="item-type">
						<option value="barang-berharga">Barang Berharga</option>
						<option value="barang-pribadi">Barang Pribadi</option>
						<option value="kendaraan">Kendaraan</option>
						<option value="uang">Uang</option>
					</select>
				</div>

				<div class="form-group" id="item-subtype-container">
					<label>Subkategori<span>*</span></label>
					<div class="item-subtype shown" data-option="barang-berharga">
						<select name="item-subtype" class="form-control" data-option="barang-berharga">
							<option value="handphone">Handphone</option>
							<option value="laptop">Laptop</option>
							<option value="perangkat">Aksesoris (Mouse/Keyboard/dll)</option>
							<option value="berharga-lainnya">Lainnya</option>
						</select>
					</div>
					<div class="item-subtype hidden" data-option="barang-pribadi">
						<select name="item-subtype" class="item-subtype form-control" data-option="barang-pribadi">
							<option value="kacamata">Kacamata</option>
							<option value="jam">Jam tangan</option>
							<option value="helm">Helm</option>
							<option value="dompet">Dompet</option>
							<option value="surat-berharga">Surat berharga (KTP/KTM/SIM/STNK)</option>
							<option value="aksesori">Aksesori (Gelang/topi/kalung/dll)</option>
							<option value="pribadi-lainnya">Lainnya</option>
						</select>
					</div>
					<div class="item-subtype hidden" data-option="kendaraan">
						<select name="item-subtype" class="item-subtype form-control" data-option="kendaraan">
							<option value="motor">Motor</option>
							<option value="sepeda">Sepeda (Sepeda kayuh / Sepeda angin)</option>
							<option value="mobil">Mobil</option>
							<option value="kendaraan-lain">Lainnya</option> 
						</select>
					</div>
					<div class="item-subtype hidden" data-option="uang">
						<input name="item-subtype" type="number" class="item-subtype form-control" data-option="uang"/>
					</div>
				</div>

				<div class="form-group" id="item-name-container">
					<label for="item-name">Merek Barang<span>*</span></label>
					<input type="text" class="form-control" id="item-name" name="item-name" placeholder="Merek barang"/>
				</div>

				<div class="form-group" id="item-location-container">
					<label for="item-location">Posisi Barang Terakhir</label>
					<input type="text" class="form-control" name="item-location" id="item-location" placeholder="Posisi barang terakhir">
				</div>

				<div class="form-group" id="item-desc-container">
					<label for="item-desc">Deskripsi Barang</label>
					<textarea cols="60" class="form-control" rows="10" name="item-desc" id="item-desc" placeholder="Ceritakan lebih jauh tentang barang Anda. Masukkan hal seperti ciri khas, keunikan, kondisi terakhir, dsb."></textarea>
				</div>

				<div id="item-contact-container">
					<label>Kontak yang Bisa Dihubungi<span>*</span></label>
					<?php
						for($i = 1; $i <= 5; $i++){
					?>

					<div class="item-contact row" data-contact='<?php echo $i?>'>
						<div class="col-sm-3 col">
							<select name='item-contact-type-<?php echo $i?>' class="form-control">
								<option value="wa">Whatsapp</option>
								<option value="line">LINE</option>
								<option value="ig">Instagram</option>
								<option value="hp">Nomor HP / Telepon</option>
								<option value="email">Email</option> 
							</select>
						</div>
						<div class="col-sm-9 col">
							<input type="text" name='item-contact-<?php echo $i?>' class="form-control"/>
						</div>
					</div>
					<?php
						}
					?>
					<input type="submit" class="col-md-12 btn btn-primary" value="Upload Data">
				</div>
			</form>
		</div>
	</body>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/less.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</html>