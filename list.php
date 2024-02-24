<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="img/informatika.png" alt="">
            <ul>
                <li><a href="logo.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="list.php">List</a></li>
                <li><a href="https://id.wikipedia.org/wiki/Wikipedia:Tutorial_(Pendaftaran)">Tutorial</a></li>
            </ul>
            <p style="color: red;">.</p>
        </div>

        <div class="main-content">
            <h2>SMK INFORMATIKA KOTA SERANG</h2>
            <p>SMK INFORMATIKA KOTA SERANG adalah sekolah kejuruan yang memiliki visi untuk mendidik siswa-siswi menjadi generasi BERMUTU (Bermartabat, Mandiri, Ukhuwah, Terdepan dan Unggul) dalam bidang ilmu agama, Bisnis, Manajemen, Komputer dan Teknologi Informasi. Pilihan tepat untuk putra-putri Bapak/Ibu menuntut ilmu di SMK Informatika Kota Serang, Jangan Asal Pilih Sekolah..</p>


        </div>
        <div class="sidebar">
            <form method="post">
                <div class="">
                    <h5>Masukan Alas</h5>
                    <input type="number" name="alas">
                </div>
                <div class="">
                    <h5>Masukan Tinggi</h5>
                    <input type="number" name="tinggi">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
            <div class="">
                <?php
                if (isset($_POST['submit'])) {
                    $alas = $_POST['alas'];
                    $tinggi = $_POST['tinggi'];

                    $luas = $alas * $tinggi / 2;
                    echo "<p>Luas Segitiga = $luas</p>";
                }
                ?>
            </div>
        </div>

    </div>
    <div class="footer" style="color: aliceblue;">
        <div class="footer-left">HIDUP SEKALI HIDUPLAH YANG BERARTI</div>
        <div class="footer-right" id="footer"><a style="text-decoration: none; color:aliceblue;" href="about.php">About</a></div>
    </div>
    </div>
</body>

</html>









<!-- echo "<a class='sidebar-link text-dark' href='$m[link]' aria-expanded='false'><span><i class='$m[icon]'></i></span><span class='hide-menu'>$m[nama_modul]</span></a>"; -->