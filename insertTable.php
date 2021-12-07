<?php
	include "koneksi.php";
	
	$sql = "INSERT INTO mahasiswa(noun, nama, jenis, tmptTgl, ortu, alamat, kota, telp, asal, agama)
			VALUES ('0001','George','Laki - Laki','Malang, 08 Maret 2002',
			'Bush','Suhat','Malang','089630303740','SMA Amerika','Islam')";
	
	if(mysqli_query($connect, $sql)){
		echo "Record berhasil ditambahkan";
	}
	else{
		echo "Record gagal ditambahkan<br>". mysqli_error($connect);
	}
	mysqli_close($connect);
		
?>
			