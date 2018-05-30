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
		<h1>Form Ubah Data Produk</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>


		<?php echo form_open("Produk/ubah/".$produk->KdPrdk); ?>
			<table cellpadding="8">
				<tr>
					<td>KdPrdk</td>
					<td><input size="90" type="text" placeholder="" name="input_KdPrdk" value="<?php echo set_value('input_KdPrdk', $produk->KdPrdk); ?>" readonly></td>
				</tr>
				<tr>
					<td>Merek</td>
					<td><input type="text" placeholder="" name="input_Merek" placeholder="" value="<?php echo set_value('input_Merek', $produk->Merek); ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" placeholder="" name="input_Nama" placeholder="" value="<?php echo set_value('input_Nama', $produk->Nama); ?>"></td>
				</tr>
				<tr>
					<td>Warna</td>
						<td><input type="text" placeholder="" name="input_Warna" value="<?php echo set_value('input_Warna', $produk->Warna); ?>"></td>
				</tr>
				<tr>
					<td>Ukuran</td>
						<td><input type="text" name="input_Ukuran" placeholder="" value="<?php echo set_value('input_Ukuran', $produk->Ukuran); ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" placeholder="" name="input_Harga" value="<?php echo set_value('input_Harga', $produk->Harga); ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" placeholder="" name="input_Jumlah" value="<?php echo set_value('input_Jumlah', $produk->Jumlah); ?>"></td>
				</tr>
				<tr>
					<td>Baik</td>
					<td><input type="text" name="input_Baik" placeholder="" value="<?php echo set_value('input_Baik', $produk->Baik); ?>"></td>
				</tr>
				<tr>
					<td>Rusak</td>
						<td><input type="text" name="input_Rusak" placeholder="" value="<?php echo set_value('input_Rusak', $produk->Rusak); ?>"></td>
				</tr>
				<tr>
					<td>Hilang</td>
						<td><input type="text" name="input_Hilang" placeholder="" value="<?php echo set_value('input_Hilang', $produk->Hilang); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
