<?php
 session_start();
 if(!isset($_SESSION['Name'])){
     header('location: log in.php');
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Tribe</title>
  <link rel="stylesheet" href="stye.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <style>
    .Tambah {
    background-color: #4CAF50; /* Green */
    border: none;
    border-radius: 5px;
    color: white;
    padding: 8px 620px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 3px 13px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;

  }
  .Tambah:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

  .ubah1{
    background-color: #31D2F2; 
    border: none;
    border-radius: 5px;
    color: white;
    padding: 5px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 8px 5px 8px 15px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }
  .ubah2{
    background-color: #BB2D3B; 
    border: none;
    border-radius: 5px;
    color: white;
    padding: 5px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 8px 0px 8px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }
  
  </style>

</head>


<body>
  <!--Nav ini untuk menampung dalam tab bar-->
  <nav>
    <div class="wrapper"></div>
    <!--Untuk logo dan menu pada tab bar-->
    <div class="logo"><a href=""><img src="img/TRIBE-removebg-preview.png" alt="logo" /></a>
      <div class="menu">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="#culture">Culture</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="Sewa.php" >Rent</a></li>
          <li><a href="#aboutus">About Us</a></li>
          <li><a href="log in.php" class="daftar">Log In</a></li>
          <li><a href="sign up.php" class="daftar">Sign Up</a></li>
          <li><a href="log out.php" class="daftar">Log Out</a></li>
        </ul>
      </div>
      <div class="content">
        <h1>JAVA CULTURE & ART.</h1>
        <br>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et aperiam maxime repellat nostrum!
          Explicabo ad voluptatem magni dolore nesciunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Maiores, animi! Lorem ipsum </p>
      </div>
      <div class="button">
        <a href="#button" class="learn">Learn More</a>
      </div>
    </div>

  </nav>

  <div class="wrapper">
    <!--Untuk Culture-->
    <section id="culture">
      <h1>Culture In Java </h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, voluptatibus!</p>
      <div class="kolom">
        <div class="img">
          <a target="_blank" href="suku jawa.jpg">
            <img src="img/suku jawa.jpg" alt="suku jawa" width="300" height="200">
          </a>
          <h3>Suku Jawa</h3>
          <div class="desc">Suku Jawa merupakan suku bangsa terbesar di Indonesia yang berasal dari Jawa....</div>

        </div>

        <div class="img">
          <a target="_blank" href="suku betawi.jpg">
            <img src="img/suku betawi.jpg" alt="suku betawi" width="300" height="200">
          </a>
          <h3>Suku Betawi</h3>
          <div class="desc">Suku Betawi adalah sebuah suku bangsa di Indonesia yang penduduknya umumnya bertempat
            tinggal di Jabodetabek dan sekitarnya....</div>
        </div>

        <div class="img">
          <a target="_blank" href="suku madura.jpg"></a>
          <img src="img/suku madura.jpg" alt="suku madura" width="300px" height="200px">
          </a>

          <h3>Suku Madura</h3>
          <div class="desc">Suku Madura merupakan salah satu etnis dengan populasi besar di Indonesia, jumlahnya sekitar
            7.179.356 juta jiwa....</div>
        </div>
        <div class="img">
          <a target="_blank" href="suku sunda.jpg">
            <img src="img/suku sunda.jpg" alt="suku sunda" width="300" height="200">
          </a>
          <h3>Suku Sunda</h3>
          <div class="desc">Suku Sunda merupakan gugusan etnis yang bersumber dari anggota barat pulau Jawa,
            Indonesia....</div>
        </div>

        <div class="img">
          <a target="_blank" href="suku osing.jpg">
            <img src="img/suku osing.jpg" alt="suku osing" width="300" height="200">
          </a>
          <h3>Suku Osing</h3>
          <div class="desc">Suku Osing atau biasa diucapkan Jawa Osing adalah penduduk asli Banyuwangi atau juga disebut
            sebagai Laros atau Wong Blambangan.... </div>
        </div>

        <div class="img">
          <a target="_blank" href="suku tengger.jpg"></a>
          <img src="img/suku tengger.jpg" alt="suku tengger" width="300px" height="200px">
          </a>
          <h3>Suku Tengger</h3>
          <div class="desc">Suku Tengger merupakan suku asli yang mendiami wilayah Gunung Bromo dan Semeru....</div>
        </div>
      </div>
    </section>
  </div>

  <div class="wrapper">
    <!--Untuk Blog-->
    <section id="blog">
      <h1>BLOG.</h1>
      <!-- <button type="button" class="btn btn-primary">Primary</button> -->
      
      <div class="kolom">
        <div class="img">
          <a target="_blank" href="berita 1.jpg">
            <img src="img/berita 1.jpg" alt="suku jawa" width="300" height="200">
          </a>
          <p>-RABU, 15 SEPTEMBER 2021 | 09:46 WIB</p>
          <h3><a href="blog/berita1.php">Hikayat Orang Jawa di Kaledonia Baru</a></h3>
          <div class="desc">Selain Suriname, komunitas orang Jawa juga ada d negara Kelodonia Baru. Merea pertama kali
            datang ke sini pada tahun 1. Begini kisahnya</div>
          <button class="ubah1" ><a href="tambah_blog.php">Edit</a></button>|
          <button class="ubah2" ><a href="proses_hapus_blog.php?id=<?php echo $data_blog['nomer'] ?>" onClick="return confirm('yakin?'); "  >Hapus</a></button>
        </div>

        <div class="img">
          <a target="_blank" href="berita 2.jpg">
            <img src="img/berita 2.jpg" alt="suku jawa" width="300" height="200">
          </a>
          <p>-SABTU, 21 AGUSTUS 2021 | 07:23 WIB</p>
          <h3>Gambang Kromong: Sejarah, Instrumen, dan Contoh Alat Musiknya</h3>
          <div class="desc">Gambang kromong adalah kessenian Betawi yang terdiri dari beberapa instrumen musik. Berikut
            penjelasan dan contoh alat musik gambang kromong Indonesia. </div>
          <button class="ubah1" ><a href="tambah_blog.php">Edit</a></button>|
          <button class="ubah2" ><a href="proses_hapus_blog.php?id=<?php echo $data_blog['nomer'] ?>" onClick="return confirm('yakin?'); "  >Hapus</a></button>
        </div>

        <div class="img">
          <a target="_blank" href="berita 3.jpg">
            <img src="img/berita 3.jpg" alt="suku jawa" width="300" height="200">
          </a>
          <p>-SABTU 07 SEPTEMBER 2021 | 21:16 WIB</p>
          <h3>KarimunBesar, Pulau di Perbatasan yang Dihuni 25 Suku Berbeda</h3>
          <div class="desc">Sebuah keramaian pasti mengundang orang orang untuk datang. Adalah Pulai Karimunbesar yang
            terbilang kecil ini dihuni sebanyak 25 suku.</div>
          <button class="ubah1" ><a href="tambah_blog.php">Edit</a></button>|
          <button class="ubah2" ><a href="proses_hapus_blog.php?id=<?php echo $data_blog['nomer'] ?>" onClick="return confirm('yakin?'); "  >Hapus</a></button>
        </div>

        <div class="img">
          <a target="_blank" href="berita44.jpg">
            <img src="img/berita44.jpg" alt="suku jawa" width="300" height="200">
          </a>
          <p>-RABU, 27 SEPTEMBER 2021 | 11:40 WIB</p>
          <h3>Mengenal Suku Mentawai dan 4 Marga Besarnya</h3>
          <div class="desc">Suku Mentawai merupakan suku asli Indonesia yang hidup di Kepulauan Mentawai. Suku Mentawai
            memiliki 4 marga besar sebagai berikut.</div>
          <button class="ubah1" ><a href="tambah_blog.php">Edit</a></button>|
          <button class="ubah2" ><a href="proses_hapus_blog.php?id=<?php echo $data_blog['nomer'] ?>" onClick="return confirm('yakin?'); "  >Hapus</a></button>
        </div>
        </div>

        <div class="kolom">
        <?php
          include 'koneksi.php';
          $qry_blog = mysqli_query($conn, "select * from blog where nomer = nomer");
          $no = 0;
          while($data_blog=mysqli_fetch_array($qry_blog)){
          $no++;
        ?>
          <div class="img">
            <a target="_blank" href="">
              <img src="<?php echo $data_blog['gambar'] ?> " alt="suku jawa" width="300" height="200">
            </a>
            <p>-<?php echo $data_blog['hari'] ?>, <?php echo $data_blog['tanggal'] ?> | <?php echo $data_blog['waktu'] ?> WIB</p>
            <h3><?php echo $data_blog['judul'] ?></h3>
            <div class="desc"><?php echo $data_blog['berita']?></div>

            <button class="ubah1" ><a href="ubah_blog.php?nomer=<?php echo $data_blog['nomer'] ?>">Edit</a></button>|
            <button class="ubah2" ><a href="proses_hapus_blog.php?nomer=<?php echo $data_blog['nomer'] ?>" onClick="return confirm('yakin?'); "  >Hapus</a></button>
          </div>
           
        <?php
            }
        ?>

        </div>
        <button class="Tambah" ><a href="tambah_blog.php">Create New Blog</a></button>
      
        <div class="selengkapnya">
          <a href="">Lihat selengkapnya >></a>
        </div>
      </div>
    </section>
  </div>


  <!--about us-->
  <div class="wrapper">
    <section id="aboutus">
      <div class="tittle">
        <h1>About Us</h1>
      </div>
      <div class="kolom">
        <div class="tes">
          <div class="kontenText">
            <div class="articlee">
              <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, quam quisquam? Excepturi voluptas esse
                volu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, consequatur!</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptate eius porro, mollitia aut
                iste
                molestiae atque ducimus suscipit maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Veritatis, asperiores?</p>
              <div class="buttonn">
                <a href="">Read More</a>
              </div>
            </div>
          </div>
          <div class="kontenImg">
            <div class="image-section">
              <img src="img/berita 1.jpg">
            </div>
          </div>
        </div>
        <div class="social">
          <a href="https://www.facebook.com/erisa.hidayah/photos_by"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/google"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/erairris/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </section>
  </div>

  <div id="copyright">
    <div class="wrapper">
      &copy; 2021. <b> TRIBE </b> All Right Reserved
    </div>
  </div>
</body>

</html>