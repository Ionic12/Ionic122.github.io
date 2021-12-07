<?php
	include "koneksi.php";
	
	$sql = "CREATE TABLE mahasiswa(
			noun INT PRIMARY KEY,
			nama VARCHAR(30) NOT NULL,
			jenis VARCHAR(30) NOT NULL,
			tmptTgl VARCHAR(30) NOT NULL,
			ortu VARCHAR(30) NOT NULL,
			alamat VARCHAR(50) NOT NULL,
			kota VARCHAR(30) NOT NULL,
			telp VARCHAR(30) NOT NULL,
			asal VARCHAR(30) NOT NULL,
			agama VARCHAR(30) NOT NULL)";
	
	if(mysqli_query($connect, $sql)){
		echo "Table mahasiswa berhasil dibuat";
	}
	else{
		echo "Table mahasiswa gagal dibuat <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
		
?>
			