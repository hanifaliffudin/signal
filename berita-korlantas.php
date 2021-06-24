<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Samsat Digital Nasional</title>
    <link rel="icon" href="/assets/img/LOGO_SIGNAL.png" type="image/x-icon" />
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
    <link rel="stylesheet" href="assets/css/style.css" />
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
              <a class="nav-link" href="/tutorial.html">Tutorial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-download px-3" href="/#download"
                >Download</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/informasi.html">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/hubungi-kami.html">Hubungi Kami</a>
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
    <!-- Messenger Plugin Obrolan Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin Obrolan code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
      var chatbox = document.getElementById("fb-customer-chat");
      chatbox.setAttribute("page_id", "104408621886277");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function () {
        FB.init({
          xfbml: true,
          version: "v11.0",
        });
      };

      (function (d, s, id) {
        var js,
          fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
      })(document, "script", "facebook-jssdk");
    </script>
    <!--  -->
    <div class="container-fluid my-lg-5 informasi">
      <div class="row justify-content-center justify-content-md-between">
        <div class="col-auto mb-4 d-none d-lg-block">
          <div class="card informasi-nav" style="width: 15rem;">
            <div class="card-header">
              Informasi
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="/artikel.html">Artikel</a>
              </li>
              <li class="list-group-item active"><a href="/berita-korlantas.php">Berita Korlantas</a></li>
              <li class="list-group-item"><a href="/video.html">Video</a></li>
              <li class="list-group-item">
                <a href="/infographic.html">Infographic</a>
              </li>
            </ul>
          </div>
        </div>
        <div
          class="col informasi-nav-mobile d-lg-none d-flex justify-content-between mb-3"
        >
          <a class="" href="/informasi.html">Home</a>
          <a class="active" href="/artikel.html">Artikel</a>
          <a class="" href="#">Berita Korlantas</a>
          <a class="" href="#">Video</a>
          <a class="" href="#">Infographic</a>
        </div>
        <div class="col-xl-9">
          <div class="container-fluid berita-terbaru p-0 mb-5">
            <div class="row justify-content-center justify-content-md-start">
              <div class="col-auto">
                <h6 class="judul-segmen d-none d-lg-block">Berita Korlantas</h6>
              </div>
            </div>
            <?php
            include('simple_html_dom.php');
            $html = file_get_html('https://korlantas.polri.go.id/category/lainnya/');
            $listBerita = $html->find('ul[class="penci-wrapper-data penci-grid"]',0);
            $artikel = $listBerita->find('article');
            // for($i=0;$i<sizeof($artikel);$i++){
            for($i=0;$i<9;$i++){
            ?>
            <div style="display:none;"><?php echo $artikel[$i]; ?></div>
            <?php } ?>
            <div class="row row-cols-md-3 justify-content-evenly">
              <a
                href="dummy"
                class="col-auto mb-2 link mb-3"
              >
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                          
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="dummy" class="col-auto mb-2 link mb-3">
                <div class="card">
                  <div class="row">
                    <div class="col-sm-auto col-4 pe-0">
                      <img
                        src="tes"
                        class="thumbnail card-img-top rounded-3"
                        alt="thumbnail-kabar"
                      />
                    </div>
                    <div class="col p-0">
                      <div class="card-body position-relative pe-lg-0">
                        <h5 class="card-title judul">
                          
                        </h5>
                        <h6
                          class="card-subtitle tanggal mb-3 d-sm-block d-none"
                        >
                         
                        </h6>
                        <div
                          class="position-absolute bottom-0 d-sm-block d-none"
                        >
                          Selengkapnya
                          <span
                            class="iconify"
                            data-icon="akar-icons:chevron-right"
                            data-inline="false"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- <div class="row mt-3 justify-content-center">
              <div class="col-auto">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="/#" aria-label="Previous">
                        <span
                          class="iconify"
                          data-icon="akar-icons:chevron-left"
                          data-inline="false"
                        ></span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="/#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="/#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="/#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="/#" aria-label="Next">
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
                  <a href="/mengenai-signal.html">Mengenai SIGNAL</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="/faq.html">FAQ</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="/kantor-samsat.html">Kantor Korlantas</a>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <a href="/hubungi-kami.html">Hubungi Kami</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex">
              <a
                href="/https://www.facebook.com/samsatdigital.id"
                class="socmed"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="bx:bxl-facebook"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="/https://twitter.com/SamsatDigital"
                class="socmed"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="ant-design:twitter-outlined"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="/https://instagram.com/samsatdigital"
                class="socmed"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="akar-icons:instagram-fill"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="/https://vt.tiktok.com/ZSJCN65dp/"
                class="socmed"
                target="_blank"
              >
                <span
                  class="iconify"
                  data-icon="cib:tiktok"
                  data-inline="false"
                ></span>
              </a>
              <a
                href="/https://www.youtube.com/channel/UCtK-XNKxnBr-U8-qoLWP5SA"
                class="socmed"
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
    <script>
    var getImages = document.querySelectorAll(".penci-image-holder");
    var htmlImages = document.querySelectorAll(".card-img-top");
    var getTanggal = document.querySelectorAll(".otherl-date");
    var htmlTanggal = document.querySelectorAll(".tanggal");
    var getURL = document.querySelectorAll(".overlay-typography");
    var htmlURL = document.querySelectorAll(".link");
    var getJudul = document.querySelectorAll(".entry-title");
    var htmlJudul = document.querySelectorAll(".judul");


    for(var i=0;i<getImages.length;i++){
      var imageURL = getImages[i].getAttribute("data-src");
      htmlImages[i].src = imageURL;
      htmlTanggal[i].innerHTML = getTanggal[i].textContent;
      htmlURL[i].href = getURL[i].href;
      htmlJudul[i].innerHTML = getJudul[i].textContent;
    }
    </script>
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
    <script src="assets/js/script.js"></script>
  </body>
</html>
