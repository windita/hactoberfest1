<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lebih Lanjut</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="judul">
        <h1>Welcome to PCC Class</h1>
    </div>
    <div class="test">
        <h3>Halo <?php session_start(); echo $_SESSION["tampil_nama];?><a class="link" href="logout.php">Sign Out</a></h3>
    </div>
    <div>
        <h1 class="SubJdl">Rincian</h1>
    </div>
    <div class="container1" align="left" style="margin: 20px auto">
        <img src="images/Keraton kasunanan.jpg" alt="">
        <p id="nama">Nama Tempat: Keraton Kasunanan Surakarta</p>
        <p>Alamat: Buluwarti, Kec.Pasar Kliwon, Kota Surakarta  </p>
        <p>Deskripsi: Keratn ini masih berfungsi sebagai tempat tinggal Sri Sunan dan rumah tangga istananya yang masih menjalankan tradisi kerajaan hingga saat ini. Keraton ini kini juga merupakan saah salah satu objek wisata utama di Kota Surakarta. </p>
        <button id="back_btn" onclick="window.location.href='dashboard.php'">Kembali</button><br>
    </div>


</body>

</html>