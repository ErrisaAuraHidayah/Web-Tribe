<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Pakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        *{
            padding: 10px;
        }
        h2{
            
            text-decoration: none;
            text-align: center;
            font-family: 'Poppins';

        }
    </style>
</head>

<body>

    <h2 class="fw-bold p-3 mb-2 bg-secondary text-white">DAFTAR PAKAIAN DI KERANJANG</h2>
    <table class="table table-hover striped" cellpadding="10" >
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Pakaian</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['cart'] as $key_produk => $val_produk) : ?>
                <tr>
                    <td><?= ($key_produk + 1) ?></td>
                    <td><?= $val_produk['nama_pakaian'] ?></td>
                    <td><?= $val_produk['qty'] ?></td>
                    <td><?= $val_produk['subtotal'] ?></td>
                    <td><a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>
    <a href="checkout.php" class="btn btn-dark">Check Out</a>

</body>

</html>