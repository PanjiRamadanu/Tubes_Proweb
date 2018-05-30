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
		<h1>Data Pelanggan</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pelanggan/tambah"); ?>'>Tambah Data</a>
		<br><br>
<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPelanggan</th>
				<th>NamaPertama</th>
				<th>NamaTerakhir</th>
				<th>Email</th>
				<th>NoTelp</th>
				<th>Alamat</th>
        <th>KodePos</th>
        <th>Kota</th>
        <th>username</th>
        <th>password</th>

				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($pelanggan)){
				foreach($pelanggan as $data){
					echo "<tr>
					<td>".$data->KdPelanggan."</td>
					<td>".$data->NamaPertama."</td>
					<td>".$data->NamaTerakhir."</td>
					<td>".$data->Email."</td>
					<td>".$data->NoTelp."</td>
					<td>".$data->Alamat."</td>
					<td>".$data->KodePos."</td>
          <td>".$data->Kota."</td>
          <td>".$data->Username."</td>
          <td>".$data->Password."</td>
					<td><a class='btn_ubah'  href='".base_url("pelanggan/ubah/".$data->KdPelanggan)."'>Ubah</a></td>
					<td><a class='btn_hapus' href='".base_url("pelanggan/hapus/".$data->KdPelanggan)."'>Hapus</a></td>
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
