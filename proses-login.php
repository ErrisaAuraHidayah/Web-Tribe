<?php

include 'koneksi.php';


$Email = $_POST['Email'];
$Password = md5($_POST['Password']);

$query = $conn->query("SELECT * FROM user where Email = '".$Email."' AND Password = '".md5($Password)."' ");
$user = $query->fetch_assoc();


    echo "SELECT * FROM user where Email = '".$Email."' AND Password = '".$Password."' ";


if(!$user){
    
    die("Email tidak ditemukan atau Password salah");
    exit();
};

session_start();
$_SESSION['Email'] = $Email;
$_SESSION['Password'] = $Password;
$_SESSION['status_login']=true;

header('Location : index.php');
?>