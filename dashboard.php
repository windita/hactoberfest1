<?php
sessioon_start();
if(!isset($_SESSION['tampil_nama'])){
    header("Llocation; sign_in.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="judul">
        <h1>Welcome To Kota Wisata Solo</h1>
    </div>
    <div class="test">
        <h3>Halo <?php echo $_SESSION["tampil_nama"];?><a class="link" href="logout.php">Sign Out</a></h3>
    </div>
    <div>
        <table width="495" align="center">
            <tr>
                <td align="center">
                    <br><img src="images/Logo_Kota_Surakarta_(Solo).png" width="60">
                </td>
                <th class="font" align="center">
                    <br>Selamat Datang di Web Pariwisata Kota Solo "Web Referensi Tempat Wisata"
                </th>
                <td align="center">
                    <br><img src="images/Logo_Kota_Surakarta_(Solo).png" width="60">
                </td>
            </tr>
        </table>
    </div>
    <div>
        <h1 class="SubJdl">Tempat Wisata Kota Solo</h1>
    </div>
    <div class="container" align="center">
        <img src="images/Keraton kasunanan.jpg" class="images">
        <p id="nama">Keraton Kasunanan Surakarta</p>
        <p>Alamat<br>"Buluwarti, Kec.Pasar Kliwon, Kota Surakarta"</p>
        <br>
        <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
    <div class="container" align="center">
        <img src="images/De colomadu.jpeg-2.jpg" class="images">
        <p id="nama">De Tjolomadu</p>
        <p>Alamat<br>"Jl. Adi Sucipto no.1, Palau Wetan, Malang JIwan, Kec.Colomadu"</p>
        <br>
        <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
    <div class="container" align="center">
        <img src="images/Puro mangkunegaran.jpeg-5.jpg" class="images">
        <p id="nama">Pura Mangkunegaran</p>
        <p>Alamat<br>"Jl. Ronggo Warsito no.83, Keprabon, Kec.Banjarsari, Kota Surakarta"</p>
        <br>
        <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
    <div class="container" align="center">
        <img src="images/The Heritage placr.jpg" class="images">
        <p id="nama">The Heritage Plece</p>
        <p>Alamat<br>"JL. Permata Raya Dukuh Tegal Mulyo, Honggobayan, Pabelan, Kec. Kartasura, Kab. Sukoharjo"</p><br>
        <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
    <div class="container" align="center">
        <img src="images/taman pelangi jurug.jpeg.jpg" class="images">
        <p id="nama">Taman Pelangi Jurug</p>
        <p>Alamat<br>"Jl. Ir. Sutami No.109, Kec.Jebres, kec.Jebres, Kota Surakarta "</p><br>
        <button id="look_btn" onclick="window.location.href='isi.php'">Lihat lebih banyak</button>
    </div>
    <div class="container" align="center">
        <img src="images/Taman balekambang.jpeg-3.jpg" class="images">
        <p id="nama">Taman Balekambang <p>   
        </p>Alamat<br>"Jl.Balekambang No.1, Manahan, Kec.Banjarsari, Kota Surakarta"
        <button id="look_btn" onclick="windoow.location.href='isi.php'">Lihat lebih banyak</button>
</p>
    </div>
</body>

</html>