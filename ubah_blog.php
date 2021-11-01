<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Poppins';
        }
        .mb-3{
            padding-left: 20px;
            padding-right: 20px;
        }
        h3{
            margin-top: 20px;
            margin-bottom: 20px;
            text-decoration: underline grey 2px;
        }
    </style>
</head>
<body>
    <?php 

    include "koneksi.php";
    $qry_get_blog = mysqli_query($conn, "Select * from blog where nomer = '".$_GET['nomer']."' ");

    $dt_blog = mysqli_fetch_array($qry_get_blog);
    ?>

<div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <div class="col-md">
        <!-- untuk upload file, tag form haru menggunakan "enctype multipart/form-data" agar file yang di upload bisa di proses oleh server -->
    <form action="proses_ubah_blog.php?nomer=<?php echo $_GET['nomer'] ?>" method="post" enctype="multipart/form-data">
         <h3 style="text-align: center;">Update Blog</h3>
        <div class="mb-3">
            <span>Nomer : </span>
            <input type="int" name="nomer" class="form-control"  value="<?php echo $dt_blog['nomer'] ?>" required>
            <div id="emailHelp" class="form-text">*Tidak Boleh Dirubah!*</div>
            
        </div>
        <br>
        <div class="mb-3">
            <span>Gambar : </span> <!-- Disini buat upload Gambar -->
            <input type="file" name="gambar" class="form-control" value="<?php echo $dt_blog['gambar'] ?>" >
            <div id="emailHelp" class="form-text">*file .jpg .jpeg .png</div>
        </div>
        <br>
        <div class="mb-3">
            <span> Judul : </span>
            <input type="text" name="judul" class="form-control" value="<?php echo $dt_blog['judul'] ?>" required>
        </div>
        <br>
        <div class="mb-3">
            <span> Hari : </span>
            <?php
            $arr_hari = array('SENIN' => 'SENIN' , 'SELASA' => 'SELASA', 'RABU' => 'RABU', 'KAMIS' => 'KAMIS', 'JUMAT' => 'JUMAT', 'SABTU' => 'SABTU', 'MINGGU' => 'MINGGU');
            ?>
            <select name="hari" class="form-control">
                <option value="">--Pilih Hari-</option>
                <option value="SENIN">SENIN</option>
                <option value="SELASA">SELASA</option>
                <option value="RABU">RABU</option>
                <option value="KAMIS">KAMIS</option>
                <option value="JUMAT">JUMAT</option>
                <option value="SABTU">SABTU</option>
                <option value="MINGGU">MINGGU</option>
                <?php foreach ($arr_hari as $key_hari => $val_hari):
                    if($key_hari == $dt_blog['hari']){
                        $selek = "selected";
                    }else {
                        $selek="";
                    }
                ?>
                <!-- <option value="<?php echo $key_hari ?>" <?php echo $selek ?>><php echo $val_hari ?></option> -->
                <?php endforeach ?>

            </select>
        </div>
        <br>
        <div class="mb-3">
            <span> Tanggal : </span>
            <input type="date" name="tanggal" class="form-control" value="<?php echo $dt_blog['tanggal'] ?>" required></input>
        </div>
        <br>
        <div class="mb-3">
            <span> Waktu : </span>
            <input type="time" name="waktu" class="form-control" value="<?php echo $dt_blog['waktu'] ?>" required></input>
        </div>
        <br>
        <div class="mb-3">
            <span> Berita Singkat : </span>
            <input type="text" name="berita" class="form-control" rows="8" cols="20" value="<?php echo $dt_blog['berita'] ?>"></input>
        </div>
        <br>
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Create</button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
    
</body>
</html>


