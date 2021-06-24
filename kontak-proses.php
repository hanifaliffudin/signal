<?php
if(isset($_POST['submit'])){
	$admin = 'info@samsatdigital.id'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['name']);
	$nik	= htmlentities($_POST['nik']);
	$phone	= htmlentities($_POST['phone']);
	$email	= htmlentities($_POST['email']);
	$subject	= 'NIK: '.$nik;
	$message	= htmlentities($_POST['message']);

	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($admin, $subject, $message, $pengirim)){
		header("Location: /");
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	echo "Error";
	// header("Location: index.php");
}
?>