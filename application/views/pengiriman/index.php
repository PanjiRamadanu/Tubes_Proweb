<html>
	<head>
		<title>CRUD Codeigniter</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Style.css">
	<body>
		<h1>Data Pengiriman</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pengiriman/tambah"); ?>'>Tambah Data</a>
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



			<form action="<?php echo site_url('pengiriman/cari');?>" method="get">
	      <input type="text" name="cari" placeholder="Cari Data Pengiriman">
	      <button type="submit">Cari Data</button>
				<div class="reset">
				<a href="<?php echo site_url('pengiriman'); ?>" style="text-decoration:none; color: white;">Reset</a>
				</div>
	    </form><center>


<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPengiriman</th>
				<th>KdPelanggan</th>
				<th>KdPegawai</th>
				<th>KdPemesanan</th>
        <th>JnsJasa</th>
        <th>NFpengiriman</th>
				<th>Status</th>
        <th>TglPengiriman</th>

				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($pengiriman)){
				foreach($pengiriman as $data){
					echo "<tr>
					<td>".$data->KdPengiriman."</td>
					<td>".$data->KdPelanggan."</td>
					<td>".$data->KdPegawai."</td>
					<td>".$data->KdPemesanan."</td>
					<td>".$data->JnsJasa."</td>
          <td>".$data->NFpengiriman."</td>
					<td>".$data->Status."</td>
          <td>".$data->TglPengiriman."</td>
					<td><a class='btn_ubah'  onClick='return doconfirm1();' href='".base_url("pengiriman/ubah/".$data->KdPengiriman)."'>Ubah</a></td>
					<td><a class='btn_hapus' onClick='return doconfirm();' href='".base_url("pengiriman/hapus/".$data->KdPengiriman)."'>Hapus</a></td>
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
