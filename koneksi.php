<?php
    $conn = mysqli_connect('localhost', 'root','','nyoba');

    if(!$conn){
        echo ' Gagat Terhubung ke database';
        exit();
    }
?>