<html>
	<head>
		<title>CRUD Codeigniter</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Style.css">
	</head>
	<body>
		<h1>Data Pegawai</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pegawai/tambah"); ?>'>Tambah Data</a>
		<br><br>
		
		<p>
	  Tabel
		<a class="w3-btn" href='<?php echo base_url("pegawai/index"); ?>' target="_blank">Pegawai »</a>&nbsp;
		<a class="w3-btn" href='<?php echo base_url("pelanggan/index"); ?>' target="_blank">Pelanggan »</a>&nbsp;
		<a class="w3-btn" href='<?php echo base_url("Pemesanan/index"); ?>' target="_blank">Pemesanan »</a>&nbsp;
		<a class="w3-btn" href='<?php echo base_url("pengadaan/index"); ?>' target="_blank">Pengadaan »</a>&nbsp;
		<a class="w3-btn" href='<?php echo base_url("pengiriman/index"); ?>' target="_blank">Pengiriman »</a>&nbsp;
		<a class="w3-btn" href='<?php echo base_url("produk/index"); ?>' target="_blank">Produk »</a>
		</p>



			<form action="<?php echo site_url('pegawai/cari');?>" method="get">
	      <input type="text" name="cari" placeholder="Cari Data Pengiriman">
	      <button type="submit">Cari Data</button>
				<div class="reset">
				<a href="<?php echo site_url('pegawai'); ?>" style="text-decoration:none; color: white;">Reset</a>
				</div>
	    </form><center>



<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPegawai</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>NoTelp</th>
				<th>KodePos</th>
        <th>username</th>
        <th>password</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($pegawai)){ 
				foreach($pegawai as $data){
					echo "<tr>
					<td>".$data->KdPegawai."</td>
					<td>".$data->Nama."</td>
					<td>".$data->Alamat."</td>
					<td>".$data->NoTelp."</td>
					<td>".$data->KodePos."</td>
					<td>".$data->username."</td>
          <td>".$data->password."</td>
					<td><a class='btn_ubah'  href='".base_url("pegawai/ubah/".$data->KdPegawai)."'>Ubah</a></td>
					<td><a class='btn_hapus' href='".base_url("pegawai/hapus/".$data->KdPegawai)."'>Hapus</a></td>
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
