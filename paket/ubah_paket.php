<?php
 include "../login/header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "../koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <h3>Ubah Paket</h3>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id" value= "<?=$dt_paket['id']?>">
        Jenis :
        <select name="jenis" class="form-control">
            <option></option>
            <option value="Selimut" <?php if($dt_paket['jenis']=='Selimut'){echo "selected";} ?> >Selimut</option>
            <option value="bed_cover" <?php if($dt_paket['jenis']=='bed_cover'){echo "selected";} ?> >Bed Cover</option>
            <option value="kaos" <?php if($dt_paket['jenis']=='kaos'){echo "selected";} ?>>Kaos</option>
        </select>
        Harga : 
        <input type="text" name="harga" value="<?=$dt_paket['harga']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
