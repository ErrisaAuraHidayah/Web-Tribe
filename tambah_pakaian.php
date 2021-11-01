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
        <!-- untuk upload file, tag form haru menggunakan "enctype multipart/form-data" agar file yang di upload bisa di proses oleh server -->
    <form action="proses_tambah_pakaian.php" method="post" enctype="multipart/form-data">
         <h3 style="text-align: center;">Tambah Daftar Pakaian</h3>
         <div class="mb-3">
            <span>id : </span>
            <input type="int" name="id_pakaian" class="form-control"  required>
        </div>
        <br>
        <div class="mb-3">
            <span> Nama Pakaian : </span>
            <input type="text" name="nama_pakaian" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <span> Deskripsi Pakaian : </span>
            <input type="text" name="deskripsi_pakaian" class="form-control" rows="8" cols="20" ></input>
        </div>
        <br>
        <div class="mb-3">
            <span> Harga : </span>
            <input type="text" name="harga" class="form-control" rows="8" cols="20" ></input>
        </div>
        <br>
        <div class="mb-3">
            <span>Gambar : </span> <!-- Disini buat upload Gambar -->
            <input type="file" name="gambar_pakaian" class="form-control" required>
            <div id="emailHelp" class="form-text">*file .jpg .jpeg .png</div>
        </div>
        <br>
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Create</button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
</body>
</html>