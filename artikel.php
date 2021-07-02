<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Aplikasi untuk memudahkan masyarakat membayar pajak kendaraan bermotor secara aman dan mudah" />
    <meta name=”robots” content=”index, follow”>
<meta
      name="keywords"
      content="signal, kendaraan bermotor, membayar pajak, pajak kendaraan bermotor, pajak kendaraan"
    />
    <title>Samsat Digital Nasional</title>
    <link rel="icon" href="/assets/img/LOGO_SIGNAL.png" type="image/x-icon" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EBJGC58H6D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EBJGC58H6D');
</script>
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito Sans:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <!-- style.css -->
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-not-home">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"
          ><img class="img-fluid" src="/assets/img/LOGO_SIGNAL.png" alt="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="iconify" data-icon="bi:list" data-inline="false"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tutorial">Tutorial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-download px-3" href="/#download"
                >Download</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/informasi">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
            </li>
          </ul>
          <form class="d-flex mb-3 mb-lg-0">
            <input
              type="text"
              class="form-control search"
              placeholder="Search"
              aria-label="Search"
              aria-describedby="search-input"
            />
          </form>
        </div>
      </div>
    </nav>
    <!-- wa button -->
    <div class="wa-btn">
      <a
        href="https://api.whatsapp.com/send?phone=+6281212820899&text="
        target="_blank"
      >
        <img class="wa-img img-fluid" src="/assets/img/wa-btn.png"
      /></a>
    </div>
    <!--  -->
    <!--  -->
    <div class="container-fluid my-lg-5 informasi">
      <div class="row justify-content-center justify-content-md-between">
        <div class="col-auto mb-4">
          <div class="card informasi-nav" style="width: 15rem;">
            <div class="card-header">
              Informasi
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item active">
                <a href="/artikel.html">Artikel</a>
              </li>
              <li class="list-group-item"><a href="/berita-korlantas.php">Berita Korlantas</a></li>
              <li class="list-group-item"><a href="video.html">Video</a></li>
              <li class="list-group-item"><a href="#">Infographic</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-9">
          <div class="container-fluid artikel ps-md-0">
            <div class="row justify-content-center justify-content-md-start">
              <div class="col-auto">
                <h6 class="judul-segmen">Artikel</h6>
              </div>
            </div>
            <?php
          // Include / load file koneksi 
          include "dbconnect.php";
          
          // Cek apakah terdapat data page pada URL
          $page = (isset($_GET['page']))? $_GET['page'] : 1;
          
          $limit = 9; // Jumlah data per halamannya
          
          // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
          $limit_start = ($page - 1) * $limit;
          
          // Buat query untuk menampilkan data sesuai limit yang ditentukan
          $sql = $db->prepare("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT ".$limit_start.",".$limit);
          $sql->execute(); // Eksekusi querynya

          $sql->bindColumn('id', $id);
          $sql->bindColumn('judul', $judul);
          $sql->bindColumn('tanggal', $tanggal);
          $sql->bindColumn('thumbnail', $thumbnail);
          $sql->bindColumn('gambar', $gambar);
          $sql->bindColumn('konten', $konten);

          $i =  1;
          //Columns must be a factor of 12 (1,2,3,4,6,12)
          $itemCount = 0;
          $numOfCols = 3;
          $numOfColsSmall = 2;
          $rowCount = 0;
          $bootstrapColWidth = (12 / $numOfCols);
          $bootstrapColWidthSmall = (12 / $numOfColsSmall);
          
          ?>
            <div
              class="row row-cols-1 row-cols-md-3 g-4 justify-content-center justify-content-md-start"
            >
            <?php
              while ($row = $sql->fetch(PDO::FETCH_BOUND)) {
              $tanggal = date("d F Y", strtotime($tanggal));

              ?> 
              <div class="col-lg-<?php echo $bootstrapColWidth; ?> col-md-<?php echo $bootstrapColWidth; ?> col-sm-<?php echo $bootstrapColWidthSmall; ?>">
                <div class="card">
                  <img
                  <?php echo 'src="data:image/jpeg;base64,'.base64_encode( $gambar ).'"';?>
                    class="card-img-top thumbnail"
                    alt="thumbnail-kabar"
                  />
                  <div class="card-body position-relative">
                    <h5 class="card-title judul">
                    <?php echo $judul ?>
                    </h5>
                    <h6 class="card-subtitle tanggal mb-3"><?php echo $tanggal ?></h6>
                    <a
                      href="read_more?id=<?php echo $id; ?>"
                      class="position-absolute bottom-0 mb-2"
                      >Selengkapnya
                      <span
                        class="iconify"
                        data-icon="akar-icons:chevron-right"
                        data-inline="false"
                      ></span
                    ></a>
                  </div>
                </div>
               </div>
               <?php
                    $rowCount++;
                    if($rowCount % $numOfCols == 0) echo '</div><div class="row my-3 mx-0 justify-content-start">';} ?>
            </div>
            <!-- <div class="row mt-3 justify-content-center">
              <div class="col-auto">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span
                          class="iconify"
                          data-icon="akar-icons:chevron-left"
                          data-inline="false"
                        ></span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span
                          class="iconify"
                          data-icon="akar-icons:chevron-right"
                          data-inline="false"
                        ></span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <!--  -->
    <footer>
      <div class="container-fluid footer">
        <div
          class="row justify-content-lg-between justify-content-start align-items-start"
        >
          <div class="col-auto" style="margin-top: -10px;">
            <div class="d-flex align-items-center">
              <img
                class="img-fluid"
                src="assets/img/LOGO_SIGNAL_footer.png"
                alt="logo"
              />
              <div
                class="vl mx-3"
                style="border-left: 1px solid white; height: 29px;"
              ></div>
              <div class="" style="font-weight: 800; font-size: 14px;">
                Dimana Saja, Kapan Saja, <br />
                Dalam Satu Genggaman <br />
                dan One Stop Service
              </div>
            </div>
          </div>
          <div class="col-auto my-3 my-sm-0">
          <div class="container-fluid p-0">
              <div class="row mb-2">
                <div class="col">
                  <a href="mengenai-signal">Mengenai SIGNAL</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="faq">FAQ</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="kantor-samsat">Kantor Korlantas</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="/hubungi-kami">Hubungi Kami</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="/privacypolicy">Kebijakan Privasi</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex">
              <a
                href="https://www.facebook.com/samsatdigital.id"
               class="socmed"
                rel="noopener noreferrer"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="bx:bxl-facebook"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="https://twitter.com/SamsatDigital"
               class="socmed"
                rel="noopener noreferrer"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="ant-design:twitter-outlined"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="https://instagram.com/samsatdigital"
               class="socmed"
                rel="noopener noreferrer"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="akar-icons:instagram-fill"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="https://vt.tiktok.com/ZSJCN65dp/"
               class="socmed"
                rel="noopener noreferrer"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="cib:tiktok"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="https://www.youtube.com/channel/UCtK-XNKxnBr-U8-qoLWP5SA"
               class="socmed"
                rel="noopener noreferrer"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="ant-design:youtube-filled"
                  data-inline="false"
                ></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="container-fluid copyright border-top text-center text-xl-start"
      >
        <div
          class="row align-items-start justify-content-center justify-content-lg-start"
        >
          <div class="col-sm-auto col">
            © Samsat Digital Nasional 2021 All Rights Reserved.
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Bootstrap 5 -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <!-- script.js -->
    <script src="/assets/js/script.js"></script>
  </body>
</html>
