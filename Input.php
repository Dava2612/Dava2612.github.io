<?php
  include 'Koneksi.php';
  $txt_ID_Pelanggan = $_POST['ID_PELANGGAN'];
  $txt_Nama_Pelanggan = $_POST['NAMA_PELANGGAN'];
  $txt_Produk = $_POST['PRODUK'];
  $txt_Harga = $_POST['HARGA'];
  $txt_Alamat = $_POST['ALAMAT'];
  $txt_No_Telp = $_POST['NO_TELP'];
  $SQL ="INSERT INTO tb_barang (
            ID_Pelanggan,
            Nama_Pelanggan,
            Produk,
            Harga,
            Alamat,
            No_Telp) 
     VALUES('$txt_ID_Pelanggan',
            '$txt_Nama_Pelanggan',
            '$txt_Produk',
            '$txt_Harga',
            '$txt_Alamat',
            '$txt_No_Telp'
            )";
  mysqli_query($conn,$SQL);
  $conn->close();
  echo "Record berhasil ditambahkan";
  header('location:data.php');
?>
