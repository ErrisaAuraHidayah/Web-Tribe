<?php
if($_POST){
    $Nomer = $_POST['nomer'];
    
    $Judul = $_POST['judul'];
    $Hari = $_POST['hari'];
    $Tanggal = $_POST['tanggal'];
    $Waktu = $_POST['waktu'];
    $Berita = $_POST ['berita'];

    if(empty($Judul)){
        echo "<script>alert('Judul tidak boleh kosong');location.href='ubah_blog.php';</script>";
    }else {
        include "koneksi.php";
        $update=mysqli_query($conn, "update blog set judul = '".$Judul."' , hari = '".$Hari."', tanggal = '".$Tanggal."', waktu = '".$Waktu."', berita = '".$Berita."'  ");

        if($update){
            echo "<script>alert('Sukses update blog');location.href='index.php';</script>";
        }else {
            echo "<script>alert('Gagal update blog');location.href='proses_ubah_blog.php';</script>";
        }
    }
}
?>