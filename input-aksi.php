<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
mysqli_query($con,"INSERT INTO user VALUES('','$nama','$alamat','$pekerjaan')");
 
echo "<script>alert('Berhasil di tambahkan!');
        window.location.href='index.php';
        </script>";
?>