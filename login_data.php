<?php
	error_reporting(E_ERROR||E_PARSE);
 	include "koneksi.php";
 	
 		$log = "select * from tb_login where email='$_POST[email]' and password='$_POST[password]'";
 		$lo = mysqli_query($conn, $log);
 		$data = mysqli_fetch_array($lo);


		 if(($_POST[email])=='' && ($_POST[password])==''){
		echo "<script>window.alert('Isi Form Terlebih Dahulu'); window.history.back() </script>"; exit;
		 }
		 else if ($data==0){
		  echo "<script>window.alert('Data Salah'); window.history.back() </script>"; exit;
		 }
		 else{
		  $_SESSION[user] = $_POST[email];
			 {
			 	 echo "<script>window.alert('Welcome, $data[username]'); window.location.href='home.php' </script>";exit;
			 }
			 		 }

?>