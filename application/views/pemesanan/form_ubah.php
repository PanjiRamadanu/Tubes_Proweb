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
		<h1>Form Ubah Data Pemesanan</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>


		<?php echo form_open("pemesanan/ubah/".$pemesanan->KdPemesanan); ?>
			<table cellpadding="8">
				<tr>
					<td>KdPemesanan</td>
					<td><input size="90" type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘PM’" name="input_kdpemesanan" value="<?php echo set_value('input_kdpemesanan', $pemesanan->KdPemesanan); ?>" readonly></td>
				</tr>
				<tr>
					<td>KdPelanggan</td>
					<td><input type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘PL’" name="input_kdpelanggan" placeholder="" value="<?php echo set_value('input_kdpelanggan', $pemesanan->KdPelanggan); ?>"></td>
				</tr>
				<tr>
					<td>KdPegawai</td>
					<td><input type="text" placeholder="Harus diisi panjang=8, harus diawali dengan ‘PG’" name="input_kdpegawai" placeholder="" value="<?php echo set_value('input_kdpegawai', $pemesanan->KdPegawai); ?>"></td>
				</tr>
				<tr>
					<td>KdPrdk</td>
						<td><input type="text" placeholder="Harus isi panjang=8, harus diawali dengan ‘P’" name="input_kdprdk" value="<?php echo set_value('input_kdprdk', $pemesanan->KdPrdk); ?>"></td>
				</tr>
				<tr>
					<td>KdPengiriman</td>
						<td><input type="text" name="input_kdpengiriman" placeholder="Harus isi panjang=8, harus diawali dengan ‘PMN’" value="<?php echo set_value('input_kdpengiriman', $pemesanan->KdPengiriman); ?>"></td>
				</tr>
				<tr>
					<td>Kuantitas</td>
					<td><input type="text" placeholder="Menyimpan banyaknya pemesanan" name="input_kuantitas" value="<?php echo set_value('input_kuantitas', $pemesanan->Kuantitas); ?>"></td>
				</tr>
				<tr>
					<td>NFpemesanan</td>
					<td><input type="text" placeholder="Menyimpan nomor faktur pemesanan" name="input_nfpemesanan" value="<?php echo set_value('input_nfpemesanan', $pemesanan->NFpemesanan); ?>"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="input_status" placeholder="Menyimpan keterangan status dari pemesanan terkait keadaannya" value="<?php echo set_value('input_status', $pemesanan->Status); ?>"></td>
				</tr>
				<tr>
					<td>TglPemesanan</td>
						<td><input type="text" name="input_tglpemesanan" placeholder="Menyimpan tanggal pemesanan" value="<?php echo set_value('input_tglpemesanan', $pemesanan->TglPemesanan); ?>"></td>
				</tr>
				<tr>
					<td>Biaya</td>
						<td><input type="text" name="input_biaya" placeholder="Menyimpan biaya pemesanan" value="<?php echo set_value('input_biaya', $pemesanan->Biaya); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
