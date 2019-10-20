<?php
include "konek.php";

if(isset($_POST["login"])){
    $username =$_POST["username"];
    $password =$_POST["pass"];

    $cekuser=mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND '$password'");
    if(mysqli_num_rows($cekuser)>0{
        session_start();
        $_SESSION["tampil_nama"] mysqli_fetch_array($cekuser)["nama"];
        header("Location:dashboard.php");
    }
    else{
        echo "<sript>alert('username atau password salah');
        window.location.href='sign_in.php';
        </script>";
    }
}
?>

