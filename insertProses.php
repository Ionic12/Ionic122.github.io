<?php
	include "koneksi.php";
	
	$noun = $_GET['noun'];
	$nama = $_GET['nama'];
	$jenis = $_GET['jenis'];
	$tmptTgl = $_GET['tmptTgl'];
	$ortu = $_GET['ortu'];
	$alamat = $_GET['alamat'];
	$telp = $_GET['telp'];
	$kota = $_GET['kota'];
	$asal = $_GET['asal'];
	$agama = $_GET['agama'];
	
	$sql= "INSERT INTO mahasiswa (noun, nama, jenis, tmptTgl, ortu, alamat, kota, telp, asal, agama )
			VALUES ('$noun', '$nama', '$jenis', '$tmptTgl', '$ortu', '$alamat', '$kota', '$telp', '$asal', '$agama' )";
	
	if(mysqli_query($connect, $sql)){
		?>
		<a href="selectTable.php"> Lihat Data di Tabel </a>
		<?php
	}
	else{
		echo "Record gagal ditambahkan<br>". mysqli_error($connect);
	}
	mysqli_close($connect);
		
?>