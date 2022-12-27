<?php
     $username = $_POST["username"];
     $password = $_POST["password"];

     $conn = new mysqli("localhost", "root", "", "login");

     $sql = "SELECT * FROM dangnhap WHERE username = '$username'";
     $result = $conn->query($sql)->fetch_assoc();

     if($result['password'] == $password){
        header("location:webTBDT.php");
     }else{
        echo "Đăng nhập sai thông tin";
     }

     $conn->close();
?>