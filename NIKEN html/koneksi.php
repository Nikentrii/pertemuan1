<?php
//membuat koneksi ke database
$koneksi=mysqli_connect ( "localhost", "root", "", "rpl" );

//cek koneksi ke database
if (!$koneksi) {
	die("Koneksi Gagal !" .mysqli_connect);
}
echo "Koneksi Berhasil !"
?>