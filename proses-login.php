<?php
    if($_POST){
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        if(empty($Email)){
            echo "<script>alert('Email is required');location.href='sign up.php';</script>";
        } else if(empty($Password)){
            echo "<script>alert('Password is required');location.href='sign up.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn, "select * from user where Email ='".$Email."' and Password='".md5($Password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['ID']=$dt_login['ID'];
                $_SESSION['Name']=$dt_login['Name'];
                $_SESSION['Email']=$dt_login['Email'];
                $_SESSION['status_login']=true;
                header("location: index.php");
            } else {
                echo "<script>alert('Email dan Password tidak benar'); location.href='log in.php';</script>";
            }
        }
    }
?>