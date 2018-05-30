<html>
	<head>
		<title>CRUD Codeigniter</title>
		<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}


.btn_ubah, a{
	background-color: #337ab7;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}

.btn_hapus, a {
    background-color: #d9534f;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

.btn_tambah, a {
    background-color: #5cb85c;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

div.ex2 {
	padding-left: 40px;
	padding-right: 40px;
}

body {
	padding-left: 50px;
	padding-right: 50px;
	padding-bottom: 50px;
	border-radius: 5px;
}

</style>
	</head>
	<body>
		<h1>Data Pemesanan</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pemesanan/tambah"); ?>'>Tambah Data</a>
		<br><br>
<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPemesanan</th>
				<th>KdPelanggan</th>
				<th>KdPegawai</th>
				<th>KdPrdk</th>
				<th>KdPengiriman</th>
				<th>Kuantitas</th>
        <th>NFpemesanan</th>
        <th>Status</th>
        <th>TglPemesanan</th>
        <th>Biaya</th>

				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($pemesanan)){
				foreach($pemesanan as $data){
					echo "<tr>
					<td>".$data->KdPemesanan."</td>
					<td>".$data->KdPelanggan."</td>
					<td>".$data->KdPegawai."</td>
					<td>".$data->KdPrdk."</td>
					<td>".$data->KdPengiriman."</td>
					<td>".$data->Kuantitas."</td>
					<td>".$data->NFpemesanan."</td>
          <td>".$data->Status."</td>
          <td>".$data->TglPemesanan."</td>
          <td>".$data->Biaya."</td>
					<td><a class='btn_ubah'  href='".base_url("pemesanan/ubah/".$data->KdPemesanan)."'>Ubah</a></td>
					<td><a class='btn_hapus' href='".base_url("pemesanan/hapus/".$data->KdPemesanan)."'>Hapus</a></td>
					</tr>";
				}
			}else{
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
</div>

	</body>


</html>
