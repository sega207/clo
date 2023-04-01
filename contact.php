<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Site Metas -->
     
    <title>Contactos</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
  </head>
  <body class="host_version">
    <!-- LOADER -->
    <div id="preloader">
      <div class="loader-container">
        <div class="progress-br float shadow">
          <div class="progress__item"></div>
        </div>
      </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-navbar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="index.php"> Cubos </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbars-host"
            aria-controls="navbars-rs-food"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbars-host">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Artigo</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="policy.php">Política de privacidade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms.php">Termos e condições</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End header -->

    <div
      id="carouselExampleControls"
      class="carousel slide bs-slider box-slider"
      data-ride="carousel"
      data-pause="hover"
      data-interval="false"
    >
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div
            id="home"
            class="first-section"
            style="background-image: url('./assets/images/will-porada-zlli7ptd8fg-unsplash.jpg')"
          >
            <div class="dtab">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 text-center">
                    <div class="big-tagline">
                      <h2><strong>Contactos</strong></h2>
                    </div>
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- end container -->
            </div>
          </div>
          <!-- end section -->
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 text-center">
            <div class="widget clearfix">
              <p>Avenida São. Rebeca, nº 22 9019-450 Loulé</p>
              <p>+1095348986797</p>
              <p>jose.henriques@abreu.org</p>
            </div>
            <!-- end clearfix -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </footer>
    <!-- end footer -->

    <div class="copyrights">
      <div class="container">
        <div class="footer-distributed">
          <div class="footer-center">
            <p class="footer-company-name">
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
              Copyright
            </p>
          </div>
        </div>
      </div>
      <!-- end container -->
    </div>
    <!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <div class="cookie-banner">
      <p style="color: #000000">
        O site utiliza cookies. Eles permitem reconhecê-lo e de receber alertas com informação sobre a sua experiência do usuário.Continuando a ver o site, eu concordo com o uso de cookies, proprietário do site de acordo com 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >A política de cookies</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
  </body>
</html>
