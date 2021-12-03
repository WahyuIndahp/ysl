<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ysl store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://objectstorage.ap-melbourne-1.oraclecloud.com/n/axzn3ntaauww/b/bucket-UTSsite/o/index.css">
</head>
<body>
    <div id="loading">
        <div id="spinner"></div>
    </div>
    <div id="particles-js"></div>
    <div id="box">
        <div class="box1 onlywide animated bounceOutLeft" style="animation-delay:1.7s;"></div>
        <div class="box2 onlywide animated bounceOutLeft" style="animation-delay:1.8s;"></div>
        <div class="box2 onlywide animated bounceOutLeft" style="animation-delay:1.9s;"></div>
        <div class="box2 animated bounceOutRight" style="animation-delay:1.9s;"></div>
        <div class="box2 onlywide animated bounceOutRight" style="animation-delay:1.8s;"></div>
        <div class="box2 onlywide animated bounceOutRight" style="animation-delay:1.7s;"></div>
    </div>
    <a id="about" onclick="showabout()" class="animated fadeIn" style="animation-delay:2.2s;">Beauty</a>
    <a id="work" onclick="showwork()" class="animated fadeIn" style="animation-delay:2.2s;">Fashion</a>
    <a id="contact" onclick="showcontact()" class="animated fadeIn" style="animation-delay:2.2s;">contact</a>
    <div id="middle" class="animated slideInDown" style="animation-delay:2.0s;">
        <h1>Ysl Company.</h1>
        <h2>Fashion / MakeUp / Jewelery</h2>
        <div id="menu">
            <a onclick="showwork()">Beauty</a>
            <a onclick="showabout()">Fashion</a>
            <a onclick="showcontact()">contact</a>
        </div>
        <table>
                <tr>
                    <td><h3> Saint Laurent Social Media</h3></td>
                    <td class="animated zoomIn" style="animation-delay:2.2s;"><a href="https://id-id.facebook.com/ysl/" target="_blank" class="social"><i class="fab fa-facebook"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.4s;"><a href="https://twitter.com/YSL?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="social"><i class="fab fa-twitter"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.6s;"><a href="https://www.instagram.com/ysl/" class="social"><i class="fab fa-instagram" target="_blank"></i></a></td>
                </tr>
                <tr>
                    <td><h3> YSL Beauty Social Media</h3></td>
                    <td class="animated zoomIn" style="animation-delay:2.2s;"><a href="https://www.facebook.com/yslbeauty/" target="_blank" class="social"><i class="fab fa-facebook"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.4s;"><a href="https://twitter.com/yslbeauty" target="_blank" class="social"><i class="fab fa-twitter"></i></a></td>
                    <td class="animated zoomIn" style="animation-delay:2.6s;"><a href="https://www.instagram.com/yslbeauty/" target="_blank" class="social"><i class="fab fa-instagram"></i></a></td>
                </tr>
        </table>
    </div>
    <div id="work_container" class="container">
        <div onclick="closework()"><i class="fas fa-angle-right"></i></div>
        <h1>Fashion</h1>
        <section>
            <h2>Yves Saint Laurent</h2>
            <p>
                Yves Saint Laurent adalah rumah mode milik desainer Yves Saint Laurent dan suaminya, Pierre Bergé, yang didirikan sejak tahun 1961. 
                Selama tahun 1960 dan 1970-an rumah mode ini mempopulerkan tren fashion seperti tampilan hippi, safari jaket untuk pria dan wanita, 
                celana ketat dan tinggi, sepatu bot setinggi paha, dan yang paling terkenal setelan tuksedo klasik untuk perempuan pada tahun 1966. 
                Pada tahun 1993, rumah mode ini dijual ke perusahaan farmasi bernama Sanofi. Pada tahun 1999, Gucci membeli merek YSL dan meminta 
                Tom Ford untuk merancang pakaian siap pakai. Pada tanggal 21 Juni 2012, merek in imengalami perubahan menjadi Saint Laurent. 
                Pada tahun 2002, Saint Laurent menutup rumah couture dari YSL. Meskipun rumah mode tidak ada lagi, merek mereka masih tetap bertahan 
                melalui perusahaan induknya Gucci Group. Pret-à-porter diproduksi di bawah arahan Stefano Pilati setelah Tom Ford meninggalkan tahun 2004.
            </p>
            <div id="used">
                <div><i class="fas fa-circle"></i> <a href="https://www.ysl.com/en-sg/shop-women/fall-21" target="_blank">&nbsp;Clothes</a></div>
                <div><i class="fas fa-circle"></i> <a href="https://www.ysl.com/en-sg/shop-women/shoes/view-all" target="_blank">&nbsp;Shoes</a></div>
                <div><i class="fas fa-circle"></i> <a href="https://www.ysl.com/en-sg/shop-women/jewellery/view-all" target="_blank">&nbsp;Jewelery</a></div>
                <div><i class="fas fa-circle"></i> <a href="https://www.ysl.com/en-sg/shop-women/handbags/view-all?prefn1=akeneo_markDownInto&prefv1=no_season&prefn2=countryInclusion&prefv2=SG&start=0&sz=23" target="_blank">&nbsp;Handbag</a></div>
            </div>
        </section>
    </div>
    <div id="about_container" class="container">
            <div onclick="closeabout()"><i class="fas fa-angle-left"></i></div>
            <h1>Beauty</h1>
            <section>
                <h2>YSL Beauty</h2>
                <p>
                    Monsieur Yves Saint Laurent secara radikal mengubah industri mewah dengan menentang aturan masa lalu, dengan berani melanggar 
                    kode mode, menciptakannya kembali sesuai dengan visinya. Dia menjalani hidupnya mencari untuk keluar dari konvensi, menginspirasi 
                    semua orang untuk mengikuti aturan mereka sendiri. Sangat. Dengan penuh semangat. Tanpa penyesalan. Sama seperti Yves Saint Laurent 
                    yang memiliki pemikiran berani yang menyerukan penemuan kembali dan tindakan, filosofi hidup ini mengilhami komitmen sosial dan 
                    lingkungan yang kami bagikan dengan Anda sekarang.
                </p>
                <div id="used">
                    <div><i class="fas fa-circle"></i> <a href="https://www.yslbeauty.co.id/in_ID/riasan-wajah/" target="_blank">&nbsp;Make Up</a></div>
                    <div><i class="fas fa-circle"></i> <a href="https://www.yslbeauty.co.id/in_ID/parfum-1/" target="_blank">&nbsp;Parfume</a></div>
                    <div><i class="fas fa-circle"></i> <a href="https://www.yslbeauty.co.id/in_ID/perawatan-kulit/" target="_blank">&nbsp;Skincare</a></div>
                </div>
            </section>
        </div>
          <div id="contact_container" class="container">
            <div onclick="closecontact()"><i class="fas fa-angle-down"></i></div>
            <h1>contact.</h1>
            <section>
                <h2>contact me</h2>
                <p>
                    <form>
                        <input type="text" placeholder="name" required>
                        <input type="email" placeholder="email" required><br>
                        <textarea placeholder="your message" required rows="5"></textarea><br>
                        <button class="btn_one">send</button>
                    </form> 
                </p>
            </section>
        </div>
        <div id="footer">
            made on earth by Wahyu Indah<br> <a href="https://imfunniee.github.io">imfunniee</a>
        </div>
    <script src="index.js" type="text/javascript"></script>
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>