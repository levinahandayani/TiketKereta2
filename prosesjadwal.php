<?php 
	if(isset($_POST['statiun1']) && isset($_POST['statiun2']) && isset($_POST['berangkat']) && isset($_POST['sampai']) && isset($_POST['harga']) && isset($_POST['tambah']))
	{
		include('koneksi.php');

		$statiun1 = $_POST['statiun1'];
		$statiun1 = $_POST['statiun2'];
		$statiun1 = $_POST['berangkat'];
		$statiun1 = $_POST['sampai'];
		$statiun1 = $_POST['harga'];

		$input = mysql_query("INSERT INTO jadwal VALUES(NULL, '$statiun1', '$statiun2', '$berangkat', '$sampai', '$harga')") or die(mysql_error());

		if($input){
			echo "DATA BERHASIL DITAMBAHKAN";
			echo "<a href='jadwal.php'>Back</a>";
		}
		else{
			echo "GAGAL TAMBAHKAN JADWAL";
			echo "<a href='jadwal.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='jadwal.php'>Back</a>";
	}

?>
