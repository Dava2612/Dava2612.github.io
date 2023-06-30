<?php
  include 'Koneksi.php';
  $txt_ID = $_POST['ID_EDIT'];
  $txt_Game = $_POST['NAMA_PELANGGAN'];
  $txt_Username = $_POST['PRODUK'];
  $txt_Server = $_POST['HARGA'];
  $txt_Metode_Pembayaran = $_POST['ALAMAT'];
  $txt_Jumlah_Diamond = $_POST['NO_TELP'];
  $SQL =  "UPDATE tb_barang SET 
            Nama_Pelanggan = '$txt_Nama_Pelanggan',
            Produk = '$txt_Produk',
            Harga = '$txt_Harga',
            Alamat = '$txt_Alamat',
            No_Telp = '$txt_No_Telp'
           WHERE ID  = $txt_ID "; 
  if (mysqli_query($conn, $SQL)) {
    echo "Record updated successfully";
    $conn->close();
    header('location:data.php');
  } else {
  echo "Error updating record: " . mysqli_error($conn);
    $conn->close();
  }
?>
