<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsi Riski</title>
    <SCRIPT LANGUAGE="JavaScript">
function select(pilihan){
alert("Masuk ke Menu " + pilihan);
document.select=pilihan;
}
</SCRIPT>    
    <link rel="stylesheet" href="resp.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>RM Sederhana</a></div>
            <div class="menu">  
                <ul>
                    <li><a href="index.html" onClick="select('Beranda')" > Beranda</a></li>
                    <li><a href="kuliner.html" onClick="select('Kuliner')">Kuliner</a></li>
                    <li><a href="tampilan.php" class="tbl-biru " onClick="select('Menu Pesanan')" >Pesan Disini</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="tentang1">
            <img src="logo2.jpg"/>
            <div class="kolom">
                <p class="deskripsi">Tentang Kami :</p>
                <h2>Profile Pemilik Restoran :</h2>
                <p>Bustaman (lahir 11 September 1942) adalah seorang pengusaha asal Indonesia. Dia merupakan pendiri sekaligus pemilik jaringan Restoran Sederhana.</p>
                <p><a href="https://id.wikipedia.org/wiki/Sederhana_(restoran)" class="tbl-pink">Info Lebih Lanjut</a></p>
            </div>
        </section>

        <section id="tentang2">
            <div class="kolom">
                <p class="deskripsi"></p>
                <h2>Sejarah</h2>
                <p>Restoran Sederhana berawal pada tahun 1972 dari sebuah rumah makan Padang kecil milik Bustaman di Pasar Bendungan Hilir, Jakarta. Dalam mengelola restorannya, Bustaman yang berasal dari Lintau, Sumatra Barat, selalu menyesuaikannya dengan lidah orang kebanyakan, sehingga ia mengurangi rasa pedas dalam masakan Padang buatannya. Ia juga memiliki hidangan khusus, yakni Ayam Pop yang telah dikenal luas.</p>
                <p>Pada tahun 1997, Bustaman mematenkan merek dagang "Sederhana" ke Direktorat Jenderal Hak atas Kekayaan Intelektual, dan mewaralabakan merek tersebut. Sejak itu usahanya terus berkembang. Bustaman sempat bersengkata dengan Djamilus Djamil, salah seorang kerabatnya yang juga menggunakan merek dagang "Sederhana" pada restoran yang dikelolanya. Namun akhirnya mereka berdamai, dan Djamilus diwajibkan untuk menambahkan merek dagangnya menjadi "Sederhana Bintaro". Untuk melindungi merek Sederhana, pada tahun 2000 Bustaman membentuk perusahaan berbadan hukum yang diberi nama PT Sederhana Abadanmitra.</p>
                <p><a href="" class="tbl-biru">Info Lebih Lanjut</a></p>
            </div>
             <img src="logo3.jpg" width="600" height="400"> 
        </section>

        <!-- makanan -->
        <section id="makann">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Beberapa Pilihan Makanan : </p>
                    <h2>Yang wajib anda coba </h2>
                    <p>dibawah ini merupakan beberapa pilihan makanan di RM Sederhana </p>
                </div>

                <div class="makan-list">
                    <div class="rm-makan">
                        <img src="logo5.jpeg" width="342" height="200"/>
                        <p>Ayam Pop</p>
                    </div>
                    <div class="rm-makan">
                        <img src="logo6.jpg" width="342" height="200"/>
                        <p>Rendang Daging</p>
                    </div>
                    <div class="rm-makan">
                        <img src="logo7.jpeg" width="342" height="200"/>
                        <p>Ikan Nila Bakar</p>
                    </div>
                    <div class="rm-makan">
                        <img src="logo8.jpeg" width="342" height="200"/>
                        <p>Sop Iga Sapi</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- minuman -->
        <section id="minumm">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Beberapa Pilihan Minuman :</p>
                    <h2>Yang Wajib anda coba</h2>
                    <p>dibawah ini merupakan beberapa pilihan minuman di RM Sederhana</p>
                </div>

                <div class="minum-list">
                    <div class="rm-minum">
                        <img src="logo9.jpg" width="342" height="200"/>
                        <p>Es Teh</p>
                    </div>
                    <div class="rm-minum">
                        <img src="logo10.jpg" width="342" height="200"/>
                        <p>Es Jeruk</p>
                    </div>
                    <div class="rm-minum">
                        <img src="logo11.jpeg" width="342" height="200"/>
                        <p>Kopi</p>
                    </div>
                    <div class="rm-minum">
                        <img src="logo12.jpg" width="342" height="200"/>
                        <p>Air Es</p>
                    </div>
                    <div class="rm-minum">
                        <img src="logo13.jpeg" width="342" height="200"/>
                        <p>Jeruk Hangat</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Info.</h3>
                    <p> Contact : (0736) 342999</p>
                </div>
                <div class="footer-section">
                    <h3>Media Sosial</h3>
                    <p>Instagram : @sederhana.rajafa <br> Facebook:Rumah Makan Sederhana</p>
                </div>
                <div class="footer-section">
                    <h3>Alamat</h3>
                    <p>Jl. Pangeran Natadirja No.Km. 6, RW.5, Jl. Gedang, Kec. Gading Cemp., Kota Bengkulu, Bengkulu 38118</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Muhammad Riski</b> Responsi Praktikum PWEB.
        </div>
    </div>
    
</body>
</html>