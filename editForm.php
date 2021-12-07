<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Havard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="https://www.harvard.edu/" style="font-size: 30px;"><img src="https://www.harvard.edu/wp-content/uploads/2021/02/Veritas_and_Adorned_Shield_2880x1920_RGB-1024x683.png" style="max-width: 90px;"> Havard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-targer="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="loginForm.html">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Campus</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
			</ul>
		</div>
	</nav>
	<?php
		include "koneksi.php";
		$noun = $_GET['noun'];
		$query = "SELECT * FROM mahasiswa WHERE noun='$noun'";
		$result = mysqli_query($connect, $query);
	?>
		<form method="GET" action="prosesEdit.php">
		<?php
			while($row=mysqli_fetch_array($result)){
		?>
			<div class="bg-image" style="background-image: url('campus2.jpg'); height: 100%; background-position: center; background-repeat: repeat; background-size: cover;">
				<div class="container">
					<div class="form-outline mb-4">
						<label>No. UN SMP/MTs/Sederajat</label>
						<input type="text" name="noun" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['noun'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['nama'];?>" style="width: 400px;">
					</div>
					<div class="form-check">
						<label >Jenis Kelamin</label>
						<br>
						<input class="form-check-input" type="radio" name="jenis" id="gridRadios1" value="Laki - Laki" checked>
						<label class="form-check-label" for="gridRadios1">
						Laki - Laki
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis" id="gridRadios2" value="Perempuan">
						<label class="form-check-label" for="gridRadios1">
						Perempuan
						</label>
					</div>
					<br>
					<div class="form-outline mb-4">
						<label>Tempat Tanggal Lahir</label>
						<input type="text" name="tmptTgl" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['tmptTgl'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Nama Orang Tua/Wali</label>
						<input type="text" name="ortu" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['ortu'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['alamat'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Kota / Kabupaten</label>
						<input type="text" name="kota" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['kota'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>No.Telp</label>
						<input type="text" name="telp" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['telp'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Asal Sekolah</label>
						<input type="text" name="asal" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['asal'];?>" style="width: 400px;">
					</div>
					<div class="form-outline mb-4">
						<label>Agama</label>
						<input type="text" name="agama" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['agama'];?>"style="width: 400px;">
					</div>
					<button type="submit" name="simpan" class="btn btn-primary btn-block" style="width: 400px;">Submit</button>
					<?php
						}
					?>
			</div>
		</form>
	</body>
</html>