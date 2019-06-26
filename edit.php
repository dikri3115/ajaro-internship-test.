<html>
	<head>
		<title>Edit Barang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.css">
		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
	</head>
	<body style="background-color: #f8f8f8;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="background-color:black;color:white">
					<h4 class="text-center"><b>Edit Data Barang</b></h4>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-4">
					<form action="" method="POST">
						<?php
							include"koneksi.php";
							$id=$_GET['id'];
							$query=mysql_query("select * from data_barang where id='$id'");
							while($data=mysql_fetch_array($query)){
							
						?>
						<div class="form-group">
							<label>Kode &nbsp;:</label>
							<input type="text" class="form-control" name="kode" value="<?php echo$data['kode']?>" required>
						</div>
						<div class="form-group">
							<label>Nama :</label>
							<input type="text" class="form-control" name="nama" value="<?php echo$data['nama']?>" required>
						</div>
						<div class="form-group">
							<label>Deskripsi :</label>
							<textarea class="form-control" name="deskripsi" required><?php echo$data['deskripsi']?></textarea>
						</div>
						<div class="form-group">
							<label>stok :</label>
							<input type="text" class="form-control" name="stok" value="<?php echo$data['stok']?>" required>
						</div>
						<div class="form-group">
							<label>Harga :</label>
							<input type="text" class="form-control" name="harga" value="<?php echo$data['harga']?>" required>
						</div>
						<div class="form-group">
							<label>Berat :</label><br>
							<input type="text" style="width:50%;display:inline" value="<?php echo$data['berat']?>" class="form-control" name="berat"> gram
						</div>
						<div class="form-group">
							<button type="submit" name="simpan" class="btn btn-success">Ubah</button>
							<a href="index.php" class="btn btn-danger">Batal</a>
						</div>
							<?php } ?>
					</form>
					<?php
						include"koneksi.php";
						if(isset($_POST['simpan'])){
							$id=$_GET['id'];
							$code=$_POST['kode'];
							$nama=$_POST['nama'];
							$deskripsi=$_POST['deskripsi'];
							$stok=$_POST['stok'];
							$harga=$_POST['harga'];
							$berat=$_POST['berat'];
							
							$query=mysql_query("update data_barang set kode='$code', nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga', berat='$berat' where id='$id'");
							if($query){
								echo"<script>alert('Berhasil diubah')</script>";
								echo"<meta http-equiv='refresh' content='0.5 url=index.php'>";
							}else{
								echo"<h4 class='text-danger'>Berhasil diedit</h4>";
							}
						}
					?>
				</div>
				<div class="col-md-6">
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-7">
					<div class="panel panel-default">
						<div class="panel-heading" style="background-color:#aeaeae">
							<h4 class="text-center alert alert-default" style="color:white;background-color:black"><b>Data Barang Keluar</b></h4>
						</div>
						<div class="panel-body">
							<table class="table table-responsive table-striped">
								<tr style="background-color:Black;color:white">
									<th class="text-left">No</th>
									<th class="text-left">Kode</th>
									<th class="text-left">Nama</th>
									<th class="text-left">Harga</th>
									<th class="text-left">Aksi</th>
								</tr>
									<?php
										include"koneksi.php";
										$no=0;
										$query=mysql_query("select * from data_barang");
										if(mysql_num_rows($query)==0){
									?>
										<td colspan="7" class="text-center" style="background-color:lightgray"><b>Data tidak ditemukan</b></td>
									<?php
										}else{
										while($data=mysql_fetch_array($query)){
											$no++
									?>
								<tr>
									<td><?php echo $no ?></td>
									<td><?php echo$data['kode']?></td>
									<td><?php echo$data['nama']?></td>
									<td><?php echo$data['harga']?></td>
									<td><a href="edit.php?id=<?php echo$data['id']?>" class="btn btn-default">Edit</a>
										<a href="hapus.php?id=<?php echo$data['id']?>" class="btn btn-danger">Hapus</a>
									</td>
								</tr>
										<?php } } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>