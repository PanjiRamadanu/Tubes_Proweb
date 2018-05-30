<html>
	<head>
		<title>CRUD Codeigniter</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Style.css">
	</head>
	<body>
		<h1>Data Produk</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("produk/tambah"); ?>'>Tambah Data</a>
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



			<form action="<?php echo site_url('produk/cari');?>" method="get">
	      <input type="text" name="cari" placeholder="Cari Data Produk">
	      <button type="submit">Cari Data</button>
				<div class="reset">
				<a href="<?php echo site_url('produk'); ?>" style="text-decoration:none; color: white;">Reset</a>
				</div>
	    </form><center>



<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPrdk</th>
				<th>Merek</th>
				<th>Nama</th>
				<th>Warna</th>
				<th>Ukuran</th>
				<th>Harga</th>
        <th>Jumlah</th>
        <th>Baik</th>
        <th>Rusak</th>
        <th>Hilang</th>

				<th colspan="2">Aksi</th>
			</tr>



			<?php
			if( ! empty($produk)){
				foreach($produk as $data){
					echo "<tr>
					<td>".$data->KdPrdk."</td>
					<td>".$data->Merek."</td>
					<td>".$data->Nama."</td>
					<td>".$data->Warna."</td>
					<td>".$data->Ukuran."</td>
					<td>".$data->Harga."</td>
					<td>".$data->Jumlah."</td>
          <td>".$data->Baik."</td>
          <td>".$data->Rusak."</td>
          <td>".$data->Hilang."</td>
					<td><a class='btn_ubah' onClick='return doconfirm1();' href='".base_url("produk/ubah/".$data->KdPrdk)."'>Ubah</a></td>
					<td><a class='btn_hapus' onClick='return doconfirm();' href='".base_url("produk/hapus/".$data->KdPrdk)."'>Hapus</a></td>
					</tr>";
				}
			}else{
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>

			<!-- Delete Modal content-->
			<script>
			function doconfirm()
			{
			    job=confirm("Are you sure to delete ?");
			    if(job!=true)
			    {
			        return false;
			    }
			}
			</script>

			<script>
			function doconfirm1()
			{
			    job=confirm("Are you sure to edit ?");
			    if(job!=true)
			    {
			        return false;
			    }
			}
			</script>



		</table>
</div>

	</body>


</html>
