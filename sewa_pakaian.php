<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php 
    include "koneksi.php";
    $qry_detail_pakaian=mysqli_query($conn,"select * from pakaian where id_pakaian = '".$_GET['id_pakaian']."'");
    $dt_pakaian=mysqli_fetch_array($qry_detail_pakaian);
?>

<h2>Sewa Pakaian</h2>
<div class="row">
    <div class="col-md-4">
        <img src="pakaian/<?=$dt_pakaian['gambar_pakaian']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
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
                        <td>Harga</td><td><?=$dt_pakaian['harga']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Sewa</td><td><input type="number" name="jumlah_sewa" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="SEWA"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>


    
</body>
</html>