<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'beranda') { echo 'active'; } ?>" href="?page=beranda">Beranda</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'tentang-sekolah') { echo 'active'; } ?>" href="?page=tentang-sekolah">Tentang Sekolah</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'layanan') { echo 'active'; } ?>" href="?page=layanan">Layanan</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'portfolio') { echo 'active'; } ?>" href="?page=portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'tim') { echo 'active'; } ?>" href="?page=tim">Tim</a></li>
          <li class="dropdown <?php if(isset($_GET['page']) && $_GET['page'] == 'lainnya') { echo 'active'; } ?>"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="?page=mitra">Mitra</a></li>
              <li class="dropdown"><a href="?page=perhitungan"><span>Perhitungan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">SPP</a></li>
                  <li><a href="#a">pengeluaran</a></li>
                  <li><a href="#">pemasukan</a></li>
                  <li><a href="#">Biaya operasional</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="?page=galeri">Galeri</a></li>
              <li><a href="?page=testimoni">testimoni</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto  <?php if(isset($_GET['page']) && $_GET['page'] == 'kontak') { echo 'active'; } ?>" href="?page=kontak">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->