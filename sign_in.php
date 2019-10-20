<?php
session_start();
if(isset($_SESSION['taampil_nama'])){
    heaader("Locaation; dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGN IN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header class="headerlog">
        <div class="wrap">
            <nav class="menu">
                <ul>
                    <li>
                        <a href="sign_up.php"><b>SIGN UP</b></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="test"></div>
    <div class="kotak">
        <p class="tulisan"><b>SIGN IN</b></p>

        <form class="label" method="post" action="action_sign_in.php">
            <label><b>Username</b></label>
            <input type="text" name="username" class="form_sign" placeholder="Masukkan username" required>

            <label><b>Password</b></label>
            <input type="password" name="pass" class="form_sign" placeholder="Masukkan password" required>
            <hr>
            <button type="submit" class="tbl_login" name="login" value="LOGIN">SIGN IN</button>
        </form>
    </div>
</body>

</html>