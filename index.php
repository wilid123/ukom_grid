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
            <h2>Sejarah Coding</h2>

            <p>Terciptanya bahasa pemrograman beriringan dengan sejarah mesin dan komputer. Awal mula bahasa pemrograman dimulai dari Antikythera yang berasal dari Yunani kuno. Antikythera adalah kalkulator yang menggunakan beberapa tuas dan konfigurasi untuk menjalankanya. Pada tahun 1200an Ismail Al-Jazari, seorang ilmuwan pada masa kejayaan Islam membangun sebuah mesin bernama Automata, sebuah robot burung merak yang bergerak dengan menggunakan hydropower (aliran air).

                Cikal bakal bahasa pemrograman pertama kali muncul pada tahun 1822, sebuah mesin bernama Difference Engine diciptakan oleh Charles Babbage, mahasiswa di universitas Cambridge Inggris. Namun mesin buatan Babbage hanya bisa mengeluarkan satu jenis output. Barulah 10 tahun kemudian Charles Babbage mengembangkan mesin pengolah data itu hingga mencapai versi kedua tahun 1849. Perjuangan Babbage diteruskan oleh anaknya, Henry Prevost. Prevost membuat kopian dari perhitungan algoritma mesinnya dan mengirim ke berbagai institusi di dunia.</p>


        </div>
        <div class="sidebar">
            <form method="post">
                <div class="">
                    <h3>Luas Segita</h3>
                </div>
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
        <div class="footer-right"  id="footer"><a style="text-decoration: none; color:aliceblue;" href="about.php">About</a></div>
    </div>
</div>
</body>

</html>









<!-- echo "<a class='sidebar-link text-dark' href='$m[link]' aria-expanded='false'><span><i class='$m[icon]'></i></span><span class='hide-menu'>$m[nama_modul]</span></a>"; -->