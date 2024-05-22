<?php
include 'koneksi.php';

$query=mysqli_querry("SELECT * from siswa",$conn);
if(!query){
    die("error:".mysqli_error());
}