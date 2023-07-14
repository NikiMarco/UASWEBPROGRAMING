<?php 

include "koneksi.php";

$username = $_POST['us'];
$password = md5($_POST['ps']);

$query = "SELECT * FROM users where username='$username' AND password='$password'";
$exceute = mysqli_query($koneksi, $query);
$proses = mysqli_fetch_array($exceute);
if ($proses) {
	include "beranda.php";
}
else{
	echo "<script type='text/javascript'>
			alert ('username dan password salah!');
		</script>";
}

 ?>