<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Blog</title>
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
<div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <div class="col-md">
    <form action="proses_tambah_blog.php" method="post">
         <h3 style="text-align: center;">New Blog</h3>
        <div class="mb-3">
            <span>Nomer : </span>
            <input type="int" name="nomer" class="form-control"  required>
            
        </div>
        <br>
        <div class="mb-3">
            <span>Gambar : </span> <!-- Disini buat upload Gambar -->
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <span> Judul : </span>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <span> Hari : </span>
            <select name="hari" class="form-control" required>
                <option value="">--Pilih Hari-</option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
                <option value="sabtu">Sabtu</option>
                <option value="minggu">Minggu</option>
            </select>
        </div>
        <br>
        <div class="mb-3">
            <span> Tanggal : </span>
            <input type="date" name="tanggal" class="form-control" required></input>
        </div>
        <br>
        <div class="mb-3">
            <span> Waktu : </span>
            <input type="time" name="waktu" class="form-control" required></input>
        </div>
        <br>
        <div class="mb-3">
            <span> Berita Singkat : </span>
            <input type="text" name="berita" class="form-control" rows="8" cols="20" ></input>
        </div>
        <br>
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Create</button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
</body>
</html>