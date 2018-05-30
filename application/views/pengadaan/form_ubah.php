<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
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
		<h1>Form Ubah Data Pengadaan</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>


		<?php echo form_open("pengadaan/ubah/".$pengadaan->KdPengadaan); ?>
			<table cellpadding="8">
				<tr>
					<td>KdPengadaan</td>
					<td><input size="90" type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘PDN’" name="input_kdpengadaan" value="<?php echo set_value('input_kdpengadaan', $pengadaan->KdPengadaan); ?>" readonly></td>
				</tr>
				<tr>
					<td>KdPrdk</td>
					<td><input type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘P’" name="input_kdprdk" placeholder="" value="<?php echo set_value('input_kdprdk', $pengadaan->KdPrdk); ?>"></td>
				</tr>
				<tr>
					<td>Kuantitas</td>
					<td><input type="text" placeholder="Menyimpan banyaknya pengadaan" name="input_kuantitas" placeholder="" value="<?php echo set_value('input_kuantitas', $pengadaan->Kuantitas); ?>"></td>
				</tr>
				<tr>
					<td>TglPemesanan</td>
						<td><input type="text" placeholder="Menyimpan tanggal pengadaan" name="input_tglpemesanan" value="<?php echo set_value('input_tglpemesanan', $pengadaan->TglPemesanan); ?>"></td>
				</tr>
				<tr>
					<td>TglTiba</td>
						<td><input type="text" name="input_tgltiba" placeholder="Menyimpan tanggal tiba barang" value="<?php echo set_value('input_tgltiba', $pengadaan->TglTiba); ?>"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" placeholder="Menyimpan keterangan pengadaan " name="input_keterangan" value="<?php echo set_value('input_keterangan', $pengadaan->Keterangan); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
