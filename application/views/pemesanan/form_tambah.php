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
		<h1>Form Tambah Data Pemesanan</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("pemesanan/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>KdPemesanan</td>
				<td><input size="90" type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘PM’" name="input_kdpemesanan" value="<?php echo set_value('input_kdpemesanan'); ?>"></td>
			</tr>
			<tr>
				<td>KdPelanggan</td>
				<td><input type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘PL’" name="input_kdpelanggan" placeholder="" value="<?php echo set_value('input_kdpelanggan'); ?>"></td>
			</tr>
			<tr>
				<td>KdPegawai</td>
				<td><input type="text" placeholder="Harus diisi panjang=8, harus diawali dengan ‘PG’" name="input_kdpegawai" placeholder="" value="<?php echo set_value('input_kdpegawai'); ?>"></td>
			</tr>
			<tr>
				<td>KdPrdk</td>
				<td><input type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘P’" name="input_kdprdk" value="<?php echo set_value('input_kdprdk'); ?>"></td>
			</tr>
			<tr>
				<td>KdPengiriman</td>
				<td><input type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘PMN’" name="input_kdpengiriman"><?php echo set_value('input_kdpengiriman'); ?></td>
			</tr>
			<tr>
				<td>Kuantitas</td>
				<td><input type="text" placeholder="Menyimpan banyaknya pemesanan " name="input_kuantitas" value="<?php echo set_value('input_kuantitas'); ?>"></td>

			</tr>
			<tr>
				<td>NFpemesanan</td>
				<td><input type="text" placeholder="Menyimpan nomor faktur pemesanan " name="input_nfpemesanan" value="<?php echo set_value('input_nfpemesanan'); ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" placeholder="Menyimpan keterangan status dari pemesanan terkait keadaannya" name="input_status" value="<?php echo set_value('input_status'); ?>"></td>
			</tr>
			<tr>
				<td>TglPemesanan</td>
				<td><input type="text" placeholder="Menyimpan tanggal pemesanan" name="input_tglpemesanan" value="<?php echo set_value('input_tglpemesanan'); ?>"></td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td><input type="text" placeholder="Menyimpan biaya pemesanan" name="input_biaya"><?php echo set_value('input_biaya'); ?></textarea>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
