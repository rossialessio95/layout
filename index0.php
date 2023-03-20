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
    <section class="store-container-section">
      <div class="container bg-dark p-5">
        <div class="container bg-white">
          <div class="row g-3">
            <div class="col-12 col-xl-6 p-3"><a href="https://placeholder.com"><img src="https://via.placeholder.com/600x830" style="width:100%"></a>
              <div class="row g-2 mt-2 ">
                <div class="col-4 col-xl-4 "><a href="https://placeholder.com"><img src="https://via.placeholder.com/180" style="width:100%"></a></div>
                <div class="col-4 col-xl-4 "><a href="https://placeholder.com"><img src="https://via.placeholder.com/180" style="width:100%"></a></div>
                <div class="col-4 col-xl-4 "><a href="https://placeholder.com"><img src="https://via.placeholder.com/180" style="width:100%"></a></div>
              </div>
            </div>
            <div class="col-12 col-xl-6 pt-5">
              <h5>Servizi in store</h5>
              <p>Scuole trucco · Prova trucco · Trucchi per eventi · Applicazione smalto · Consulenze skincare su misura</p>
              <div class="col-12 col-xl-6  border-bottom mt-5 pb-5">
                <div class="row g-2">
                  <h5>Prenota i servizi</h5>
                  <div class=" col-2 col-lg-4">
                    <div class="border text-center" style="width:50%;"><a href="/"><img src="img/telefono.jpg"></a></div>
                  </div>
                  <div class=" col-2 col-lg-4">
                    <div class="border text-center" style="width:50%;"><a href="/"><img src="img\mesaggio.jpg"></a></div>
                  </div>
                  <div class=" col-2 col-lg-4">
                    <div class="border text-center" style="width:50%;"><a href="/"><img src="img/fb.png"></a></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6 mt-5 border-bottom pb-3">
                <h5>Orari Negozi</h5>
                <table class="table-orari">
                  <thead>
                    <tr>
                      <td class="p-2">Lunedi</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                    <tr>
                      <td class="p-2">Martedi</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                    <tr>
                      <td class="p-2">Mercoledi</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                    <tr>
                      <td class="p-2">Giovedi</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                    <tr>
                      <td class="p-2">Venerdi</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                    <tr>
                      <td class="p-2">Sabato</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                    <tr>
                      <td class="p-2">Domenica</td>
                      <td class="p-2">09:30 - 13:00 <br /> 16:00 - 20:00</td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
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
