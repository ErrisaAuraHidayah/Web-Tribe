<?php
    if($_GET['nomer']){
        include "koneksi.php";

        $qry_hapus=mysqli_query($conn, "DELETE from blog where nomer = '".$_GET['nomer']."' ");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus blog');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus blog');location.href='index.php';</script>";
        }

        


    }
?>