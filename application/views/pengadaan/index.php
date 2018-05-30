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
		<h1>Data Pengadaan</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pengadaan/tambah"); ?>'>Tambah Data</a>
		<br><br>
<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPengadaan</th>
				<th>KdPrdk</th>
				<th>Kuantitas</th>
				<th>Kuantitas</th>
        <th>NFpemesanan</th>
        <th>TglTiba</th>
        <th>Keterangan</th>

				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($pengadaan)){
				foreach($pengadaan as $data){
					echo "<tr>
					<td>".$data->KdPengadaan."</td>
					<td>".$data->KdPrdk."</td>
					<td>".$data->Kuantitas."</td>
					<td>".$data->KdPrdk."</td>
					<td>".$data->TglPemesanan."</td>
          <td>".$data->TglTiba."</td>
          <td>".$data->Keterangan."</td>
					<td><a class='btn_ubah'  href='".base_url("pengadaan/ubah/".$data->KdPengadaan)."'>Ubah</a></td>
					<td><a class='btn_hapus' href='".base_url("pengadaan/hapus/".$data->KdPengadaan)."'>Hapus</a></td>
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
