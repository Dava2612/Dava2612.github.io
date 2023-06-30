<?php
include 'koneksi.php';
session_start();
$user = $_POST['USER'];
$pass = $_POST['PASS'];
$SQL = "SELECT username,Password
		FROM tb_user";
//membuat query
$result= mysqli_query($conn, $SQL)
    or die("gagal data query : ".mysqli_error($conn));
//menampung hasil query
$row= mysqli_fetch_array($result);
if ($row['Username']==$user && $row['Pass']==$pass){
		$conn->close();
		echo "sukses";
		header('location:data.php');
	}else{
		$conn->close();
		echo "gagal login";
		header('location:data.php');
	}
 ?>


