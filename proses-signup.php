<?php
    if($_POST){
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = md5($_POST['Password']);
        $Phone = $_POST['Phone'];
    }

    if(empty($ID)){
        echo "<script>alert('ID tidak boleh kosong'); location.href='signup.php';</script>";
    }else if(empty($Name)){
        echo "<script>alert('Nama tidak boleh kosong'); location.href='signup.php';</script>";
    }else if(empty($Email)){
        echo "<script>alert('Email tidak boleh kosong'); location.href='signup.php';</script>";
    }else if(empty($Password)){
        echo "<script>alert('Password tidak boleh kosong'); location.href='signup.php';</script>";
    }else if(empty($Phone)){
        echo "<script>alert('Phone tidak boleh kosong'); location.href='signup.php';</script>";
    }else{
        include './koneksi.php';
        $query = mysqli_query($conn, "insert into user (ID, Name, Email, Password, Phone) value ('".$ID."', '".$Name."', '".$Email."', '".$Password."', '".$Phone."') ") or die(mysqli_error($conn));

        if($query){
            echo "<script>alert('Sign Up Berhasil!'); location.href='log in.php';</script>";
        } else {
            echo "<script>alert('Sign Up Gagal!'); location.href='log in.php';</script>";
        }
    }
?>