<html>
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
	<div class="container">
        <h2>Tabel Pendaftar</h2>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th> No UN </th>
				<th> Nama </th>
				<th> Jenis Kelamin </th>
				<th> TTL </th>
				<th> Ortu / Wali </th>
				<th> Alamat </th>
				<th> Kota / Kabupaten </th>
				<th> No. Telp </th>
				<th> Asal Sekolah </th>
				<th> Agama </th>
			</tr>
			<?php
				include "koneksi.php";
				
				$query = "SELECT * FROM mahasiswa";
				$result = mysqli_query($connect, $query);
				
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_array($result)){
			?>
			<tr>
				<td> <?php echo $row["noun"] ?> </td>
				<td> <?php echo $row["nama"] ?> </td>
				<td> <?php echo $row["jenis"] ?> </td>
				<td> <?php echo $row["tmptTgl"] ?> </td>
				<td> <?php echo $row["ortu"] ?> </td>
				<td> <?php echo $row["alamat"] ?> </td>
				<td> <?php echo $row["kota"] ?> </td>
				<td> <?php echo $row["telp"] ?> </td>
				<td> <?php echo $row["asal"] ?> </td>
				<td> <?php echo $row["agama"] ?> </td>
			<?php
					}
				}
				else{
					echo "0 result";
				}
			?>
			</tr>
		</table>
	</div>
</body>
</html>
			
			
				