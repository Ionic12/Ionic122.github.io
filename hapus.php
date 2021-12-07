<?php
	include "koneksi.php";
	
	$noun = $_GET['noun'];
	
	$query= "DELETE FROM mahasiswa WHERE noun='$noun'";
	$result = mysqli_query($connect, $query);

	if ($result){
		echo "Data berhasil dihapus";
	?>
		<a href="homeAdmin.php"> Lihat Data </a>
	<?php
	}
	else{
		echo "Data gagal dihapus".mysqli_error($connect);
	}
?>
			
			