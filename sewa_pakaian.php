<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    *{
        padding: 5px;
    }
    
</style>
<body style="background-color: #FFFFFF;">
<?php 
    include "koneksi.php";
    $qry_detail_pakaian=mysqli_query($conn,"select * from pakaian where id_pakaian = '".$_GET['id_pakaian']."'");
    $dt_pakaian=mysqli_fetch_array($qry_detail_pakaian);
    $harga = $dt_pakaian['harga'];
    $harga2=number_format($harga, 2);
?>

<h2 class="fw-bold p-3 mb-2 bg-secondary text-white" style="text-align: center;">SEWA PAKAIAN</h2>
<div class="row">
    <div class="col-md-4" >
        <img src="<?=$dt_pakaian['gambar_pakaian']?>" class=" card-img-top" style="width: 400px; height: 550px; margin-left: 30px;">
    </div>
    <div class="col-md-8" >
        <form action="masukkankeranjang.php?id_pakaian=<?=$dt_pakaian['id_pakaian']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Pakaian</td><td><?=$dt_pakaian['nama_pakaian']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_pakaian['deskripsi_pakaian']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td><td><?php echo("Rp. " .$harga2);?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Sewa</td><td><input type="number" name="jumlah_sewa" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-dark" type="submit" value="SEWA"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>


    
</body>
</html>