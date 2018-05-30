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
		<h1>Form Ubah Data Pengiriman</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>


		<?php echo form_open("pengiriman/ubah/".$pengiriman->KdPengiriman); ?>
			<table cellpadding="8">
				<tr>
					<td>KdPengiriman</td>
						<td><input type="text" name="input_kdpengiriman" placeholder="" value="<?php echo set_value('input_kdpengiriman', $pengiriman->KdPengiriman); ?>"></td>
				</tr>
				<tr>
					<td>KdPelanggan</td>
					<td><input type="text" placeholder="" name="input_kdpelanggan" placeholder="" value="<?php echo set_value('input_kdpelanggan', $pengiriman->KdPelanggan); ?>"></td>
				</tr>
				<tr>
					<td>KdPegawai</td>
					<td><input type="text" placeholder="" name="input_kdpegawai" placeholder="" value="<?php echo set_value('input_kdpegawai', $pengiriman->KdPegawai); ?>"></td>
				</tr>
				<tr>
					<td>KdPemesanan</td>
					<td><input size="90" type="text" placeholder="" name="input_kdpemesanan" value="<?php echo set_value('input_kdpemesanan', $pengiriman->KdPemesanan); ?>" readonly></td>
				</tr>
				<tr>
					<td>JnsJasa</td>
						<td><input type="text" placeholder="" name="input_jnsjasa" value="<?php echo set_value('input_jnsjasa', $pengiriman->JnsJasa); ?>"></td>
				</tr>
				<tr>
					<td>NFpengiriman</td>
					<td><input type="text" placeholder="" name="input_nfpengiriman" value="<?php echo set_value('input_nfpengiriman', $pengiriman->NFpengiriman); ?>"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="input_status" placeholder="" value="<?php echo set_value('input_status', $pengiriman->Status); ?>"></td>
				</tr>
				<tr>
					<td>TglPengiriman</td>
						<td><input type="text" name="input_tglpengiriman" placeholder="" value="<?php echo set_value('input_tglpengiriman', $pengiriman->TglPengiriman); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
