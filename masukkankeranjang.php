<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_pakaian=mysqli_query($conn,"select * from pakaian where id_pakaian = '".$_GET['id_pakaian']."'");
        $dt_pakaian=mysqli_fetch_array($qry_get_pakaian);
        $_SESSION['cart'][]=array(
            'id_pakaian'=>$dt_pakaian['id_pakaian'],
            'nama_pakaian'=>$dt_pakaian['nama_pakaian'],
            'qty'=>$_POST['jumlah_sewa'],
            //ini buat nambahkan subtotal
            'subtotal' =>$dt_pakaian['harga']*$_POST['jumlah_sewa']
        );
    }
    header('location: keranjang.php');
?>
