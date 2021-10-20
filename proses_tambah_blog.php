<?php
    if($_POST){
        $Nomer = $_POST['nomer'];
        //mulai upload gambar
        $Gambar = $_FILES['gambar']; // ini isinya, file yang berhasil di upload ke server (disimpan sementara di memory)
        $Nama = 'img/' . basename($Gambar['name']); // tinggal menggunakn $Gambar, tidka perlu $_FILES['gambar'], variabel ini digunakan untuk tujuan penyimpnannya
        $Ukuran = $Gambar['size'];
        $file_tmp = $Gambar['tmp_name'];
        
        //akhir upload gambar
        $Judul = $_POST['judul'];
        $Hari = $_POST['hari'];
        $Tanggal = $_POST['tanggal'];
        $Waktu = $_POST['waktu'];
        $Berita_singkat = $_POST['berita'];

        if(empty($Judul)){
            echo "<script>alert('Judul tidak boleh kosong');location.href='tambah_blog.php';</script>";
        }else {
            include "koneksi.php";
            //mulai upload gambar
            move_uploaded_file($file_tmp, $Nama); // disini tinggal move file temporari di merori, ke path tujuan
            //akhir upload gambar
            $insert=mysqli_query($conn, "insert into blog (nomer, gambar, judul, hari, tanggal, waktu, berita) value ('".$Nomer."','".$Nama."','".$Judul."','".$Hari."','".$Tanggal."','".$Waktu."','".$Berita_singkat."')") or die(mysqli_error($conn));

            if($insert){
                echo  "<script>alert('Sukses menambahkan blog');location.href='index.php';</script>";
            }else {
                "<script>alert('Gagal menambahkan blog');location.href='tambah_blog.php';</script>";
            }


        }
    }
?>