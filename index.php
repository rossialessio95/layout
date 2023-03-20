<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar shadow-sm navbar-expand-xl bg-light" aria-label="Offcanvas navbar large">
      <div class="container-fluid nav-container"><a class="navbar-brand" href="/"><img src="" alt="Logo"></a>
        <div class="offcanvas bg-light offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label"><a href="/" ><img src="" alt="Logo"></a></h5><button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pb-5 pb-xl-0 align-items-center text-center">
            <ul class="navbar-nav justify-content-center justify-content-xl-end vstack gap-3 flex-grow-1">
              <li class="nav-item">
                <h2><a class="nav-link" href="index.php">Lorem Ipsum</a></h2>
              </li>
              <li class="nav-item">
                <h2><a class="nav-link" href="index0.php">Lorem Ipsum.1</a></h2>
              </li>
              <li class="nav-item">
                <h2><a class="nav-link" href="index00.php">Lorem Ipsum.2</a></h2>
              </li>
              <li class="nav-item">
                <h2><a class="nav-link" href="#" target="_blank">Lorem Ipsum.3</a></h2>
              </li>
            </ul>
            <ul class="icon-container justify-content-center d-xl-none hstack gap-5 flex-grow-1">
              <li><a href="#" target="_blank"><img src="img/facebook.svg" alt=""></a></li>
              <li><a href="#" target="_blank"><img src="img/instagram.svg" alt=""></a></li>
              <li><a href="#" target="_blank"><img src="img/youtube.svg" alt=""></a></li>
              <li><a href="#" target="_blank"><img src="img/spotify.svg" alt=""></a></li>
            </ul>
            <ul class="navbar-nav justify-content-center copy d-xl-none vstack gap-0 flex-grow-1">
              <li class="nav-item">
                <p>Copyright 2022 </p>
              </li>
              <li class="nav-item">
                <p>ROSSI ALESSIO SRL</p>
              </li>
              <li class="nav-item"><a class="nav-link d-inline" href="#">Privacy</a> e <a class="nav-link d-inline" href="#">Cookie policy</a></li>
            </ul>
          </div>
        </div><button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"><span class="navbar-toggler-icon"></span></button>
      </div>
    </nav>
    <section class="first-banner-container">
      <div class="container first-banner">
        <div class="row g-0">
          <div class="col-12 col-md-6 d-flex justify-content-end">
            <div class="box-risotto"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/648" alt=""></a></div>
          </div>
          <div class="col-12 col-md-6">
            <div class="text-container d-flex align-items-start justify-content-center flex-column h-100 p-4">
              <h2>Lorem Ipsum</h2>
              <p>07-21-2022</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><button class="border"> LEGGI </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="one-banner-section">
      <div class="container one-banner ">
        <div class="row g-3">
          <div class="col-12 col-sm-12 py-3">
            <div class="box2">
              <picture>
                <source media="(min-width:481px)" srcset="img/slider-hero.jpg">
                <source media="(max-width:480px)" srcset="img/slider-hero.jpg"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/1300x570" alt="" style="width:100%"></a>
                <div class="container text-double d-inline align-items-start justify-content-center flex-column p-5">
                  <h2>Lorem Ipsum</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><button class="bg-danger"> Scopri</button>
                </div>
            </div>
            </picture>
          </div>
        </div>
      </div>
    </section>
    <section class="video-banner-section">
      <div class="video-banner container">
        <div class="row g-3 py-2">
          <div class="col-12 col-md-6">
            <div class="container d-flex align-items-start justify-content-center flex-column h-100">
              <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
              <p style="color:orange">MENU</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><button class="bg-warning btn-center"> Prenota un tavolo</button>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="box1"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/640" alt=""></a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="photo-multi-container">
      <div class="container">
        <div class=" photo-multi text-center p-1">
          <div class="row g-1 ">
            <div class="col-12 col-md-6">
              <div class="boh"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/642x943" alt=""></a></div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row g-1 ">
                <img src="img/galery2.jpg" style="width: 50%; height:50%;">
                <img src="img/galery2.jpg" style="width: 50%; height:50%;">
              </div>
              <div class="row g-1 py-1">
                <img src="img/galery2.jpg" style="width: 50%; height:50%;">
                <img src="img/galery2.jpg" style="width: 50%; height:50%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="menu-container-section">
      <div class="container-fluid g-0">
        <div class="menu-container">
          <div class="row g-0">
            <div class="col-12 col-sm-6">
              <div class="box1">
                <h2 class="text-centro">Lorem Ipsum</h2><img src="img/Aperitivo.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="box1">
                <h2 class="text-centro">Lorem Ipsum</h2><img src="img/Dinnermenu.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-12 col-sm-6">
              <div class="box1">
                <h2 class="text-centro">Lorem Ipsum</h2><img src="img/winelist.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="box1">
                <h2 class="text-centro-allergeni">Lorem Ipsum</h2><img src="img/Allergeni.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="card-container-section mt-5">
      <div class="container-section p-5">
        <div class="container bg-light">
          <div class="row g-5">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 p-3">
              <div class="card"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/302x433" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Lorem Ipsum </h5>
                  <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="row g-3">
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/telefono.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/mesaggio.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/fb.png"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/instagram.png"></a></li>
                    </div><button type="button" name="button">Scopri</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 p-3">
              <div class="card"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/302x433" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Lorem Ipsum</h5>
                  <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="row g-3">
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/telefono.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/mesaggio.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/fb.png"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/instagram.png"></a></li>
                    </div><button type="button" name="button">Scopri</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 p-3">
              <div class="card"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/302x433" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Lorem Ipsum is </h5>
                  <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="row g-3">
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/telefono.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/mesaggio.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/fb.png"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/instagram.png"></a></li>
                    </div><button type="button" name="button">Scopri</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 p-3">
              <div class="card"><a href="https://placeholder.com"><img class="card-img-top" src="https://via.placeholder.com/302x433" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title text-center">Store</h5>
                  <p class="card-text text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="row g-3">
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/telefono.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/mesaggio.jpg"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/fb.png"></a></li>
                    </div>
                    <div class="col-3 col-md-3">
                      <li class="icon-items list-group-item text-center border"><a href="/"><img src="img/instagram.png"></a></li>
                    </div><button type="button" name="button">Scopri</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--div class="container text-center p-5">
      <div class="row gy-5">
        <div class="col-6 col-sm-12">
          <div class="p-3 border ">Custom column padding-1</div>
        </div>
      </div>
      <div class="text-center py-3">
        <div class="row gy-3">
          <div class="col-6 col-sm-3">
            <div class="p-3 border">Custom column padding-2</div>
          </div>
          <div class="col-9 col-sm-9">
            <div class="p-3 border">Custom column padding-3</div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="text-center p-5">
        <div class="row gy-3">
          <div class="col-12 col-sm-6">
            <div class=" border">1</div>
          </div>
          <div class="col-12 col-sm-6">
            <div class=" border">1.1</div>
          </div>
          <div class="col-6 col-sm-12">
            <div class="border">2</div>
          </div>
        </div>
        <div class="row gy-3 py-3">
          <div class="col-4 col-sm-8">
            <div class="border">3</div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="border">4</div>
          </div>
          <div class="col-4 col-sm-2">
            <div class="border">5</div>
          </div>
          <div class="col-4 col-sm-6">
            <div class="border">5.1</div>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-9 col-sm-3">
            <div class="border">6</div>
          </div>
          <div class="col-3 col-sm-9">
            <div class="border">7</div>
          </div>
        </div>
      </div>
    </div-->



    <section class="footer-container-section">
      <div class="container-fluid bg-light">
        <div class="footer">
          <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-xl-4 p-5 text-center"><img src="" alt="Logo"></div>
            <div class="col-12 col-sm-3 col-md-3 col-xl-2 pt-5 text-center">
              <h5>Lorem Ipsum</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">Lorem Ipsum</li>
                <li class="nav-item mb-2">Lorem Ipsum</li>
                <li class="nav-item mb-2">Lorem Ipsum</li>
                <li class="nav-item mb-2">Lorem Ipsum</li>
              </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-xl-2 pt-5 text-center">
              <h5>Lorem Ipsum</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">Lorem Ipsum</li>
                <li class="nav-item mb-2">Lorem Ipsum</li>
                <li class="nav-item mb-2">Lorem Ipsum</li>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-xl-2 pt-5 text-center">
              <h5>Roma SRL</h5>
              <p>Via del pincopallino di artezeca, 196B - 00023 ROMA <br /> P.IVA/C.F 89792634983 <br /><a href="/">Tel. 06.457328734</a></p>
            </div>
            <div class="text-init border p-3 text-center">
              <p>Roma è un progetto editoriale realizzato con tanta buona volontà. Tutti i diritti sono riservati a Rossi Alessio.</p>
            </div>
          </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
