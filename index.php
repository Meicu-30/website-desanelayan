<?php include_once("inc_header.php")?>
<style>
  .banner{
  background: url("gambar/laut.jpg") no-repeat center center;
  background-size: cover;
  padding-top: 20%;
  padding-bottom: 20%;
   color: #000000;
}

.crop img {
  object-fit: cover;
}

.tim img{
  width: 250px;
  border: 10px solid #69070f;
}

.client img {
  height: auto;
  max-height: 50px;
}
</style>
  <div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6"><?php echo ambil_Kutipan('27')?></h4>
    <h3 class="display-3"><?php echo ambil_Judul('27')?></h3>
    <?php echo maximum_kata(ambil_Isi('27'),20)?>
    <a href="<?php echo buat_link_halaman('27')?>">
      <button type="button" class="btn btn-danger btn-lg">Pelajari Lebih Lanjut</button>
    </a>
  </div>
</div>

<div class="container-fluid Home pt-5 pb-5">
  <div class="container text-center">
    <h2 class="display-3" id="Home">Home</h2>
    <p> Tanjung Leidong Desa nelayan </p>

    <div class="row pt-4">
      <div class="col-md-4">
        <img src="gambar/images boat.jpeg" style width="200px" height="200px">
        <h3 class="mt-3">Gambar kapal/ Boat songko ikan</h3>
        <p> Boat songko atau bisa kita sebut sebagai kapal penangkap ikan yang banyak di gunakan masyarakat sebagai sarana utama dalam proses penangkapan ikan.</p>
      </div>

      <div class="col-md-4">
        <img src="gambar/maxresdefault.jpg" style width="200px" height="200px">
        <h3 class="mt-3">Tangkahan Tanjung Leidong</h3>
        <p> merupakan tangkahan utama tempat kapal barang dan kapal nelayan berlabuh, tangkahan ini merupakan tangkahan paling lama dan yang pertama ada di tanjung leidong.</p>
      </div>

      <div class="col-md-4">
        <img src="gambar/produksi-ikan-asin.jpg" style width="200px" height="200px">
        <h3 class="mt-3">Proses pengeringan ikan asin</h3>
        <p> ikan asin merupakan hasil laut yang utanma bagi nelayan di sana, maka tak jarang kita lihat di sebagian besar tempat pelabuhan kapal banyak masyarakat yang menjemur ikan hasil laut dengan cara tradisional.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="Profil Desa">Profil Desa</h2>
    <p>Beberapa gambar yang menunjukkan daerah utama dan budaya dari kampung nelayan Tanjung leidong</p>

    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4">
        <div class="card crop-img">
  <img src="gambar/images labu.jpeg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Tanjung Leidong</h5>
    <p class="card-text">Gambar keseluruhan Desa nelayan yang di ambil menggunakan Dron menunjukkan bentuk daerah pesisir.</p>
  </div>
</div>
</div>

<div class="col-md-4">
        <div class="card crop-img">
  <img src="gambar/pangkal.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Pangkalan Lunang</h5>
    <p class="card-text">salah satu daerah pedalaman di Leidong, ciri khas dari daerah ini adalah perkebunannya, di mana daerah tersebut sebagian besar masyarakatnya merupakan petani.</p>
  </div>
</div>
</div>

<div class="col-md-4">
        <div class="card crop-img">
  <img src="gambar/mandulang.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Pantai Simandulang</h5>
    <p class="card-text">Pantai simandulang merupakan daerah dengan penduduk yang sedikit hal ini di karenakan daerah tersebut berada pada garis pantai yang paling dekat dengan laut. sebagian besar rumah di sana masih merupakan rumah apung .</p>
  </div>
</div>
</div>

<div class="col-md-4">
        <div class="card  crop-img">
  <img src="gambar/pawai.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Maulid nabi</h5>
    <p class="card-text">Pawai menyambut acara tahunan ummat muslim yaitu maulid nabi, biasanya masyarakat muslim di sana akan melakukan beberapa cara ke agamaan seperti ceramah, mengaji, perlombaan tahfiz dan pawai.</p>
  </div>
</div>
</div>

<div class="col-md-4">
        <div class="card crop-img">
  <img src="gambar/download.jpeg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Perayaan dewa ong ya kong</h5>
    <p class="card-text">Perayaan dewa ong ya kong merypkan perayaan yang sudah menjadi tradisi bagi masyarakat tiong hua, setiap satu tahun peryaan besar ini di lakukan di klenteng tertua di tanjung leidong. sebagian besar perayaan di lakukan di jalan utama depan klenteng.</p>
  </div>
</div>
</div>

<div class="col-md-4">
        <div class="card crop-img">
  <img src="gambar/mqdefault.jpg" class="card-img-top" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Marhobas adat Batak</h5>
    <p class="card-text">Marhobas merupakan tradisi yang masih di lakukan masyarakat suku batak di tanjung leidong dalam menyelenggarkan pesta besar, seperti pernikahan, dan acara besar lainnya.</p>
  </div>
</div>
</div>

<div class="container-fluid layanan pt-5 pb-5">
    <div class="container">
      <h2 class="display-3 text-center" id="Berita Desa">Berita Desa</h2>
      <p class="text-center">Tahukah kalian?.</p>
      <div class="clearfix pt-5">
        <img src="gambar/pelabuhan.jpg" class="col-md-6 float-md-end mb-3 card-img" width="300" height="400">
        <p>Tanjung leidong merupakan kampung nelayan yang berada di daerah Sumatera, tepatnya berada di labuhan batu utara kecamatan kualuh leidong. Leidong merupakan daerah pesisir di mana hampir sebagian besar daerah nya di kelilingi oleh laut, sehingga mayoritas penduduk nya lebih bnyak berpropesi sebagai nelayan. Tak hanya itu daerah ini juga merupakan daerah perkebunan kelapa sawit, yang di mana hampir sebagian besar produksi kelapa sawit juga berasal dari daerah Tanjung Leidong.
        <br>
        <br>Kualuh Leidong, biasa disingkat Ledong, adalah legenda bagi seantero Sumatra. Tanjung Leidong, ibu kota Kualuh Leidong, Labuhan Batu Utara, menjadi pusat magnet kawasan ini, sebuah pelabuhan kecil yang berada di sudut paling timur pesisir Sumatra Utara.  Tanjung Leidong ini menyimpan segudang keunikan dan misteri bagi pengunjungnya. Bermacam-macam stigma terhadap kota kecil di Selat Malaka ini, mulai dari tempat tujuan pelarian, gudang perompak kapal, penghasil udang, hingga produsen padi terbesar di Sumatra Utara. Tinggal sejenak di kota pelabunan ini, serasa berada di setting film layar lebar, Pirates of the Carribean. Jika ada orang muda Tapanuli, dataran tinggi Sumatra, yang bertindak kriminal, dan melarikan diri, biasanya beberapa tahun kemudian akan ketahuan, yang bersangkutan ada di Leidong, kota pelabuhan itu.
        <br>
        <br>Kota berpenduduk plural -Tionghoa, Batak, dan Melayu ini sejak lama dikenal sebagai sentra konsentrasi padi dan hasil laut. Konon, hingga saat ini, kecamatan Ledong yang berpenduduk sebanyak 28.612 jiwa ini masih mengekspor beras ke Malaysia dan Singapura, ditengah kebijakan impor beras besar-besaran oleh pemerintah Indonesia. Kota kecil ini, menjadi kontrol puluhan tahun puluhan desa yang mengitarinya. Konsentrasi kekayaan se kabupaten berada pada sekelompok orang di kota kecil yang terkesan “angker” tapi eksotis ini. Konon, terdapat dua orang mafia besar masing masing di dua pelabuhan berdekatan, satu orang berada di tanjung Balai, kabupaten Asahan dan satu orang lagi, berada disini, pelabuhan Tanjung Leidong, kabupaten Labuhan Batu (sebelum dipecah tiga). Kepada dua orang inilah terkonsentrasi kepemilikan dan kekayaan dua kabupaten ini.
        <br>
        <br>Kota kecil ini dapat ditempuh melalui laut dan darat. Naik kapal laut dari kota Tanjung Balai menuju Leidong memakan waktu 5 jam dengan ongkos Rp.10.000.  Via jalan darat, bisa ditempuh dari ibukota Kabupaten Labura, Aek Kanopan, dengan memakai mobil atau sepeda motor off road, dengan waktu tempuh sekitar 7 hingga 8 jam. Jalan ini rawan longsor hingga patah, mengingat bahan jalan yang masih hanya terbuat dari timbunan tanah.
      </p>
      </div>
    </div>
  </div>

  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
    <h2 class="display-3" id="Produk Desa">Produk Desa</h2>
    <p>hasil produksi laut yang di jadikan usaha oleh para nelayan dan warga sekitar.</p>
    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4 text-center tim">
        <img src="gambar/teri-teri.jpg" class="rounded circle mb-3" >
        <h4>Ikan Teri</h4>
        <p> </p>
      </div>

        <div class="col-md-4 text-center tim">
        <img src="gambar/produksi-ikan-asin-olvv6g-prv.jpg" class="rounded circle mb-3">
        <h4>Ikan Asin  Belah</h4>
        <p> </p>
      </div>

        <div class="col-md-4 text-center tim">
        <img src="gambar/Untitled-design-234-3074199033 (1).webp" class="rounded circle mb-3">
        <h4>Ikan Teri</h4>
        <p> </p>
      </div>

      <div class="col-md-4 text-center tim">
        <img src="gambar/kepiting.jpg" class="rounded circle mb-3">
        <h4>Kepiting</h4>
        <p> </p>
      </div>

      <div class="col-md-4 text-center tim">
        <img src="gambar/udang.jpg" class="rounded circle mb-3">
        <h4>Udang</h4>
        <p> </p>
      </div>

      <div class="col-md-4 text-center tim">
        <img src="gambar/kerang.jpg" class="rounded circle mb-3">
        <h4>kerang</h4>
        <p> </p>
      </div>
    </div>
  </div>
</div>
<?php include_once("inc_footer.php")?>