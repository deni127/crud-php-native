<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
mysqli_query($con,"UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");

echo "<script>alert('Berhasil di update!');
        window.location.href='index.php';
        </script>";
?>