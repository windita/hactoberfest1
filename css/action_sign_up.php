<?php
include "konek.php";

if(isset($_POST["register"])){
    $username =$_POST["username"];
    $nama =$POST["nama"];
    $password=$_POST["pass"];

    $selectusername=mysqli_query($conn, "SELECT username FROM user WHERE username= $username'");
    if(mysqli_num_rows($selectusername)>0){
        echo "<script>alert('username sudah ada');
        window.location.href='sign_up.php';
        </script>";
    }
    $query=mysqli_query($conn, "INSERT INTO user(username, nama, password) VALUES ('$username','$nama','password')");

    if($query){
        echo "<script>alert('Berhasil registrasi');
        window.location.href='sign_in.php';
        </script>";
    }
    else{
        echo "<script>alert(username atau password salah');
        window.location.href='sign_in.php';
        </script>";
    }
}
?>