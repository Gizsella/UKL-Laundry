<?php
if($_POST){
    $id=$_POST['id'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];

    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
 
    } else {
            include "../koneksi.php";
            $update=mysqli_query($conn,"UPDATE paket SET jenis='".$jenis."', harga='".$harga."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id=".$id."';</script>";
            }
        }
        
    } 
?>
