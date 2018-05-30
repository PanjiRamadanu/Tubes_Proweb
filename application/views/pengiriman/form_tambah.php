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
		<h1>Form Tambah Data Pengadaan</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("pengiriman/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>KdPengiriman</td>
				<td><input type="text" placeholder="" name="input_kdpengiriman"><?php echo set_value('input_kdpengiriman'); ?></td>
			</tr>
			<tr>
				<td>KdPelanggan</td>
				<td><input type="text" placeholder="" name="input_kdpelanggan" placeholder="" value="<?php echo set_value('input_kdpelanggan'); ?>"></td>
			</tr>
			<tr>
				<td>KdPegawai</td>
				<td><input type="text" placeholder="" name="input_kdpegawai" placeholder="" value="<?php echo set_value('input_kdpegawai'); ?>"></td>
			</tr>
			<tr>
				<td>KdPemesanan</td>
				<td><input size="90" type="text" placeholder="" name="input_kdpemesanan" value="<?php echo set_value('input_kdpemesanan'); ?>"></td>
			</tr>
			<tr>
				<td>JnsJasa</td>
				<td><input type="text" placeholder="" name="input_jnsjasa"><?php echo set_value('input_jnsjasa'); ?></td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td><input type="text" placeholder="" name="input_biaya"><?php echo set_value('input_biaya'); ?></textarea>
			</tr>
			<tr>
				<td>NFpengiriman</td>
				<td><input type="text" placeholder="" name="input_nfpengiriman" value="<?php echo set_value('input_nfpengiriman'); ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" placeholder="" name="input_status" value="<?php echo set_value('input_status'); ?>"></td>
			</tr>
			<tr>
				<td>TglPengiriman</td>
				<td><input type="text" placeholder="" name="input_tglpengiriman" value="<?php echo set_value('input_tglpengiriman'); ?>"></td>
			</tr>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
