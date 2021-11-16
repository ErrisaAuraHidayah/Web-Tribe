<?php 
if($_GET['id']){
    include "koneksi.php";
    $id_peminjaman_pakaian=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "select * from peminjaman_pakaian where id_peminjaman_pakaian = '".$id_peminjaman_pakaian."' ");
    $dt_pinjam=mysqli_fetch_array($cek_terlambat);
    if(strtotime($dt_pinjam['tanggal_kembali'])>=strtotime(date('Y-m-d'))){
        $denda=0;
    } else{
        $harga_denda_perhari=5000;
        $tanggal_kembali = new DateTime();
        $tgl_harus_kembali = new DateTime($dt_pinjam['tanggal_kembali']); 
        $selisih_hari = $tanggal_kembali->diff($tgl_harus_kembali)->d;
        $denda=$selisih_hari*$harga_denda_perhari;
    }
    mysqli_query($conn, "insert into pengembalian_pakaian (id_peminjaman_pakaian, tanggal_pengembalian,denda) value('".$id_peminjaman_pakaian."','".date('Y-m-d')."','".$denda."')");
    header('location: histori_peminjaman.php');
}
?>
