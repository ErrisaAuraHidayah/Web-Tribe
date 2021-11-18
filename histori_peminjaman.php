<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data atau Histori Pengembalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    * {
        padding: 10px;
    }

    h2 {

        text-decoration: none;
        text-align: center;
        font-family: 'Poppins';

    }
</style>

<body>
    <h2 class="fw-bold p-3 mb-2 bg-secondary text-white">HISTORI PEMINJAMAN PAKAIAN</h2>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal harus Kembali</th>
            <th>Nama Pakaian</th>
            <th>Status</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_histori = mysqli_query($conn, "select * from peminjaman_pakaian order by id_peminjaman_pakaian desc");
            $no = 0;
            while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                $no++;
                //menampilkan pakaian yang dipinjam
                $pakaian_dipinjam = "<ol>";
                $qry_pakaian = mysqli_query($conn, "select * from  detail_peminjaman_pakaian join pakaian on pakaian.id_pakaian=detail_peminjaman_pakaian.id_pakaian where id_peminjaman_pakaian = '" . $dt_histori['id_peminjaman_pakaian'] . "'");
                while ($dt_pakaian = mysqli_fetch_array($qry_pakaian)) {
                    $pakaian_dipinjam .= "<li>" . $dt_pakaian['nama_pakaian'] . "</li>";
                }
                $pakaian_dipinjam .= "</ol>";
                //menampilkan status sudah kembali atau belum
                $qry_cek_kembali = mysqli_query($conn, "select * from pengembalian_pakaian where id_peminjaman_pakaian = '" . $dt_histori['id_peminjaman_pakaian'] . "'");
                if (mysqli_num_rows($qry_cek_kembali) > 0) {
                    $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
                    $denda = "denda Rp. " . $dt_kembali['denda'];
                    $status_kembali = "<label class='alert alert-success'>Sudah kembali <br>" . $denda . "</label>";
                    $button_kembali = "";
                } else {
                    $status_kembali = "<label class='alert alert-danger'>Belum kembali</label>";
                    $button_kembali = "<a href='kembali.php?id=" . $dt_histori['id_peminjaman_pakaian'] . "' class='btn btn-danger text-white' onclick='return confirm(\"Yakin Mau Mengembalikan Pakaian ini ?\")'>Kembalikan</a>";
                }
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt_histori['tanggal_pinjam'] ?></td>
                    <td><?= $dt_histori['tanggal_kembali'] ?></td>
                    <td><?= $pakaian_dipinjam ?></td>
                    <td><?= $status_kembali ?></td>
                    <td><?= $button_kembali ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>



</body>

</html>