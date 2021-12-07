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
	
	$query= "UPDATE mahasiswa SET nama='$nama', jenis='$jenis',
		tmptTgl='$tmptTgl', ortu='$ortu', alamat='$alamat',
		kota='$kota', telp='$telp', asal='$asal', agama='$agama'
			WHERE noun='$noun'";
			$result = mysqli_query($connect, $query);
	
	if ($result){
		echo "Berhasil Update Data Ke Database";
	?>
		<a href="selectTable.php"> Lihat Data di Tabel </a>
	<?php
	}
	else{
		echo "Gagal Update Data".mysqli_error($connect);
	}
?>
			
			