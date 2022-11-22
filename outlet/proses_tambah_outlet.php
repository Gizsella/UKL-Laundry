<?php
if($_POST){
    $nama_outlet=$_POST['nama_outlet'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];
    if(empty($nama_outlet)){
        echo "<script>alert('nama outlet  tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama_outlet, alamat, tlp) value ('".$nama_outlet."','".$alamat."','".$tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan outlet');location.href='tambah_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
?>
