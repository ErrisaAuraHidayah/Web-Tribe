<?php
    include './koneksi.php';

    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = md5($_POST ['Password']);
    $Phone = $_POST['Phone'];

    $query_sql = "INSERT INTO user (ID, Name, Email, Password, Phone) VALUES ('$ID','$Name','$Email','$Password','$Phone')";

    $result = mysqli_query($conn, $query_sql);

    if($result){
        echo "<script>
                alert('Sign Up Berhasil!');
                location.href = 'http://localhost/Nyoba-Tribe/index.php';
              </script>";
        
    }else{
        echo "<script> 
                alert('Sign Up Gagal! ');
                location.href = 'http://localhost/Nyoba-Tribe/sign%20up.php';
            </script>";
        exit();
       
    }


    
?>