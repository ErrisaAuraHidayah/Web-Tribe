<?php
    $conn = mysqli_connect('localhost', 'root','','nyoba');

    if(!$conn){
        echo ' Gagal Terhubung ke database';
        exit();
    }
?>