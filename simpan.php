<?php
		include "koneksi.php";
		
			$username = $_POST['username'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			$pass = $_POST['password'];
			$pass1 = $_POST['password1'];
			$sql="insert into tb_login values(null,'$username','$email', '$telp', '$alamat', '$pass')";
			
			if($username=='' || $email=='' || $telp=='' || $alamat=='' || $pass==''){
			   		echo "<script>window.alert('Silahkan Isi Form Terlebih Dahulu'); 
			    	window.location.href='register.html'</script>"; exit;
			}elseif ($pass != $pass1) {
			  		echo "<script>window.alert('Password Tidak Valid'); 
			    	window.history.back() </script>"; exit;
			}elseif ($conn->query($sql) === TRUE) {
			    	echo "<script>window.alert('Data Berhasil Disimpan'); 
			    	window.location.href='login.php'</script>"; exit;
			}else{
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

	?>