<?php
    if($_POST){
        $id_pakaian = $_POST['id_pakaian'];
        //mulai upload gambar
        $Gambar = $_FILES['gambar_pakaian']; // ini isinya, file yang berhasil di upload ke server (disimpan sementara di memory)
        $Nama = 'pakaian/' . basename($Gambar['name']); // tinggal menggunakn $Gambar, tidka perlu $_FILES['gambar'], variabel ini digunakan untuk tujuan penyimpnannya
        $Ukuran = $Gambar['size'];
        $file_tmp = $Gambar['tmp_name'];
        
        //akhir upload gambar
        $Nama_pakaian = $_POST['nama_pakaian'];
        $Deskripsi_pakaian = $_POST['deskripsi_pakaian'];
        $Harga = $_POST['harga'];
        

        if(empty($Nama_pakaian)){
            echo "<script>alert('Nama Pakaian tidak boleh kosong');location.href='tambah_blog.php';</script>";
        }else {
            include "koneksi.php";
            //mulai upload gambar
            move_uploaded_file($file_tmp, $Nama); // disini tinggal move file temporari di merori, ke path tujuan
            //akhir upload gambar
            $insert=mysqli_query($conn, "insert into pakaian (id_pakaian, nama_pakaian, deskripsi_pakaian, harga, gambar_pakaian) value ('".$id_pakaian."','".$Nama_pakaian."','".$Deskripsi_pakaian."','".$Harga."','".$Gambar."')") or die(mysqli_error($conn));

            if($insert){
                echo  "<script>alert('Sukses menambahkan Daftar Pakaian Adat');location.href='Sewa.php';</script>";
            }else {
                "<script>alert('Gagal menambahkan Daftar Pakaian Adat');location.href='tambah_pakaian.php';</script>";
            }


        }
    }
?>