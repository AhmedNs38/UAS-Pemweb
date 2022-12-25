<?php
require 'functions.php';

$artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Subnetting</title>
</head>

<body>
    <div class="intro">
        <h1 class="logo-header">
            <span class="logo">SUBNE</span><span class="logo">TTING</span>
        </h1>
    </div>
    <header>
        <h4> SUBNETTING</h4>

        <nav>
            <a href="tambah-artikel.php">*</a>
        </nav>
    </header>

    .
    <div class="main">
        <main>
            <?php foreach ($artikel as $item) : ?>
                <h1><?php echo ($item['judul']) ?></h1>
                <br>
                <p><?php echo ($item['isi_artikel']) ?></p>
            <?php endforeach; ?>
            
            <ul>
                <li>
                    <b>1. Jumlah subnet</b>
                </li>
                <p>2x, di mana x adalah banyaknya binari 1 pada oktet terakhir subnet mask (2 oktet terakhir untuk kelas B, dan 3 oktet terakhir untuk kelas A). Jadi jumlah subnet adalah 22 = 4 subnet.</p>
                <li>
                    <b>2. Jumlah host per subnet</b>
                </li>
                <p>2y – 2, di mana y adalah adalah kebalikan dari x yaitu banyaknya binari 0 pada oktet terakhir subnet. Jadi jumlah host per subnet adalah 26 – 2 = 62 host</p>
                <li>
                    <b>3. Blok subnet</b>
                </li>
                <p>56 – 192 (nilai oktet terakhir subnet mask) = 64. Subnet berikutnya adalah 64 + 64 = 128 dan 128 + 64 = 192. Jadi subnet lengkapnya adalah 0, 64, 128, 192.</p>
                <li>
                    <b>4. Hos dan broadcast yang valid</b>
                </li>
                <p>Mengetahui host dan broadcast yang valid memerlukan tabel dengan catatan host pertama adalah 1 angka setelah subnet dan broadcast adalah 1 angka sebelum subnet berikutnya.</p>
            </ul>
            <br>
            <table border="1" cellpadding="2">
                        <thead>
                            <tr>
                                <th>Subnet</th>
                                <td>192.168.1.0</td>
                                <td>192.168.1.64</td>
                                <td>192.168.1.128</td>
                                <td>192.168.1.192</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Host Awal</th>
                                <td>192.168.1.1</td>
                                <td>192.168.1.65</td>
                                <td>192.168.1.129</td>
                                <td>192.168.1.192</td>
                            </tr>
                            <tr>
                                <th>Host Terakhir</th>
                                <td>192.168.1.62</td>
                                <td>192.168.1.126</td>
                                <td>192.168.1.190</td>
                                <td>192.168.1.254</td>
                            </tr>
                            <tr>
                                <th>Broadcast</th>
                                <td>192.168.1.63</td>
                                <td>192.168.1.127</td>
                                <td>192.168.1.191</td>
                                <td>192.168.1.255</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
            <h1>Fungsi Subnetting</h1>
                <div style="text-align: justify;">
                    <ul>
                        <li>
                            Membantu mengembangkan jaringan ke jarak geografis yang menjauh.
                        </li>
                        <li>
                            Mengurangi lalu lintas jaringan sehingga data yang lewat di perusahaan tidak akan terjadi collision atau tabrakan data.
                        </li>
                        <li>
                            Kerja jaringan bisa lebih dioptimalkan.
                        </li>
                        <li>
                            Membuat pengelolaan jaringan jadi lebih sederhana.
                        </li>
                    </ul>
                </div>
            <br>
            <h1>Tujuan Subnetting</h1>
                <div style="text-align: justify;"></div>
                <p>Tujuan dari subnetting adalah sebagai berikut:</p>
                <ul>
                    <li>
                        Agar lebih efisien pada saat pengalamatan jaringan.
                    </li>
                    <li>
                        Membagi suatu kelas jaringan menjadi jaringan-jaringan yang lebih kecil.
                    </li>
                    <li>
                        Untuk mengatasi masalah perbedaan antara hardware dengan topologi fisik jaringan.
                    </li>
                    <li>
                        Memudahkan saat mengalokasikan IP Address dalam sebuah jaringan agar bisa memaksimalkan penggunaan IP Address.
                    </li>
                    <li>
                        Untuk meningkatkan keamanan dan mengurangi resiko terjadinya perlambatan yang terjadi pada jalu paket-paket
                        data(congestion) akibat terlalu banyak host dalam suatu jaringan.
                    </li>
                    <li>
                        Untuk mengatasi masalah perbedaan hardware dan media firik yang di gunakan dalam suatu jaringan.
                    </li>
                    <br>
        </main>
        <aside class="kanan">
            <div id="card">
                <div id="card-content">
                    <div id="card-title">
                        <h2>IP Subnet Kalkulator</h2>
                        <div class="underline-title"></div>
                    </div>
                    Masukan IP Address
                    <input type="text" class="addr" id="q1"> .
                    <input type="text" class="addr" id="q2"> .
                    <input type="text" class="addr" id="q3"> .
                    <input type="text" class="addr" id="q4"> /
                    <input type="text" class="addr" id="cidr">
                    <button onclick='Hasil();'>Hasil</button>
                    <hr>
                    <div class="hasil">
                        <span class=label>IP Address :</span>
                        <span class=value id=resIP></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Subnet mask :</span>
                        <span class=value id=resMask></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Net Address :</span>
                        <span class=value id=resNet></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Broadcast Address :</span>
                        <span class=value id=resBC></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Standard Class :</span>
                        <span class=value id=resClass></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Range :</span>
                        <span class=value id=resRange></span>
                    </div>
                    <div class="hasil">
                        <span class=label>IP Binary :</span>
                        <span class=value id=resBinIP></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Mask Binary :</span>
                        <span class=value id=resBinMask></span>
                    </div>
                    <div class="hasil">
                        <span class=label>Net Address Binary :</span>
                        <span class=value id=resBinNet></span>
                    </div>
                    <div class="hasil">
                        <span class=label>BC Address Binary :</span>
                        <span class=value id=resBinBC></span>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>Range Private IP Address</h1>
                <table border="1" cellpadding="2">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Oktet pertama</th>
                                <th>Subnetmask default</th>
                                <th>Private address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A</td>
                                <td>1-127</td>
                                <td>255.0.0.0</td>
                                <td>10.0.0.0-10.255.255.255</td>
                            </tr>
                            <tr>
                                <td>B</td>
                                <td>128-191</td>
                                <td>255.255.0.0</td>
                                <td>172.16.0.0-172.31.255.255</td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>192-223</td>
                                <td>255.255.255.0</td>
                                <td>192.168.0.0-192.168.255.255</td>
                            </tr>
                        </tbody>
                    </table>
        </aside>
    </div>
    </div>
        <footer>
            Created by Ahmed, Pansera, Dafa
        </footer>
</body>
<script src="JS/script.js"></script>

</html>