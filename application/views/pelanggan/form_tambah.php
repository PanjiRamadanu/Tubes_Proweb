<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
		<style>

				input[type=text]{
						width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
				}

				body {
				padding-left: 100px;
				padding-right: 100px;
		    border-radius: 5px;
		    background-color: #f2f2f2;
		}


.btn_simpan{
	background-color: #337ab7;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}

.btn_batal{
	background-color: #d9534f;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	/* display: inline-block; */
}
		</style>
	</head>
	<body>
		<h1>Form Tambah Data Pelanggan</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("pelanggan/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>KdPelanggan</td>
				<td><input size="90" type="text" placeholder="Harus diisi panjang=8, harus diawali dengan ‘PL’" name="input_kdpelanggan" value="<?php echo set_value('input_kdpelanggan'); ?>"></td>
			</tr>
			<tr>
				<td>Nama Pertama</td>
				<td><input type="text" placeholder="Menyimpan nama pertama pelanggan" name="input_namapertama" placeholder="" value="<?php echo set_value('input_namapertama'); ?>"></td>
			</tr>
			<tr>
				<td>Nama Terakhir</td>
				<td><input type="text" placeholder="Menyimpan nama terakhir pelanggan" name="input_namaterakhir" placeholder="" value="<?php echo set_value('input_namaterakhir'); ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" placeholder="Menyimpan email pelanggan" name="input_email" value="<?php echo set_value('input_email'); ?>"></td>
			</tr>
			<tr>
				<td>NoTelp</td>
				<td><input type="text" placeholder="Menyimpan nomor telepon pelanggan" name="input_notelp"><?php echo set_value('input_notelp'); ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" placeholder="Menyimpan alamat pelanggan" name="input_alamat" value="<?php echo set_value('input_alamat'); ?>"></td>

			</tr>
			<tr>
				<td>KodePos</td>
				<td><input type="text" placeholder="Menyimpan kode pos kota" name="input_kodepos" value="<?php echo set_value('input_kodepos'); ?>"></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td><input type="text" placeholder="Menyimpan kota pelanggan" name="input_kota" value="<?php echo set_value('input_kota'); ?>"></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" placeholder="Menyimpan username pegawai" name="input_username"><?php echo set_value('input_username'); ?></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" placeholder="Menyimpan password pegawai" name="input_password"><?php echo set_value('input_password'); ?></textarea>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
