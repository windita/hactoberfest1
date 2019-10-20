<?php
session_start();
if(isset($_SESSION['tampil_nama'])){
header("Location:dashboard.php");
exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGN UP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header class="headerlog">
        <div class="wrap">
            <nav class="menu">
                <ul>
                    <li>
                        <a href="sign_in.php"><b>SIGN IN</b></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="test"></div>
    <div class="kotak">
        <p class="tulisan"><b>SIGN UP</b></p>

        <form class="label" method="post" action="action_sign_up.php">
            <label><b>Nama</b></label>
            <input type="text" placeholder="Masukkan Nama" name="nama" class="form_sign" required>

            <label><b>Username</b></label>
            <input type="text" name="username" class="form_sign" placeholder="Masukkan username" required>

            <label><b>Password</b></label>
            <input type="password" name="pass" class="form_sign" placeholder="Masukkan password" required>
            <hr>
            <button type="submit" class="registerbtn" name="register" value="SIGNUP">SIGN UP</button>
        </form>
    </div>
</body>

</html>