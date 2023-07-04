<?php
	if (isset($_POST['submit']))
	{
		$nama = $_FILES['bukti']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "../foto/".$nama);
		$save->mysqli_query($koneksi "INSERT INTO konfirmasi

		(nama, email, telp, alamat, pembayaran, bukti)

		VALUES('$_POST[nama]', '$_POST[email]', '$_POST[telp]', 
		'$_POST[alamat]', '$_POST[pembayaran]', '$_POST[bukti]')");
	}

	echo "Data Tersimpan";
	
?>
