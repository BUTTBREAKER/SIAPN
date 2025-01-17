<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>SIPAN</title>
  <base href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>" />
  <link rel="icon" href="./assets/img/favicon.png" />
  <link rel="stylesheet" href="./assets/css/theme.css" />
</head>

<body>
  <main class="main" id="top">
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
      data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container">
        <a class="navbar-brand" href="./">
          <img src="assets/img/logo.png" height="64" />
        </a>
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0"
          id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
            <li class="nav-item px-3 px-xl-4">
              <a class="nav-link fw-medium" href="#service">Service</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a class="nav-link fw-medium" href="#destination">Destination</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a class="nav-link fw-medium" href="#booking">Booking</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a class="nav-link fw-medium" href="#testimonial">Testimonial</a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a
                class="btn btn-outline-dark order-1 order-lg-0 fw-medium"
                href="./ingresar">
                Iniciar sesión
              </a>
            </li>
            <li class="nav-item px-3 px-xl-4">
              <a
                class="btn btn-outline-dark order-1 order-lg-0 fw-medium"
                href="./registro">
                Registrarse
              </a>
            </li>
            <!-- <li class="nav-item px-3 px-xl-4">
              <a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="#!">
                Sign Up
              </a>
            </li> -->
            <!-- <li class="nav-item dropdown px-3 px-lg-0">
              <a
                class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium"
                href="#"
                id="navbarDropdown"
                data-bs-toggle="dropdown">
                EN
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end border-0 shadow-lg"
                style="border-radius:0.3rem;">
                <li>
                  <a class="dropdown-item" href="#!">EN</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">BN</a>
                </li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <?= $page ?>
    <section class="pb-0 pb-lg-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0">
            <img class="mb-4" src="./assets/img/logo.png" width="150" />
            <p class="fs--1 text-secondary mb-0 fw-medium">
              Book your trip in minute, get full Control for much longer.
            </p>
          </div>
          <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">
              Company
            </h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  About
                </a>
              </li>
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Careers
                </a>
              </li>
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Mobile
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Help/FAQ
                </a>
              </li>
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Press
                </a>
              </li>
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Affiliate
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
            <ul class="list-unstyled mb-0">
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Airlinefees
                </a>
              </li>
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Airline
                </a>
              </li>
              <li class="mb-2">
                <a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">
                  Low fare tips
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
            <div class="icon-group mb-4">
              <a
                class="text-decoration-none icon-item shadow-social"
                id="facebook"
                href="#!">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a
                class="text-decoration-none icon-item shadow-social"
                id="instagram"
                href="#!">
                <i class="fab fa-instagram"></i>
              </a>
              <a
                class="text-decoration-none icon-item shadow-social"
                id="twitter"
                href="#!">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
            <h4 class="fw-medium font-sans-serif text-secondary mb-3">
              Discover our app
            </h4>
            <div class="d-flex align-items-center">
              <a href="#!">
                <img class="me-2" src="./assets/img/play-store.png" />
              </a>
              <a href="#!">
                <img src="./assets/img/apple-store.png" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="py-5 text-center">
      <p class="mb-0 text-secondary fs--1 fw-medium">UPTM © <?= date('Y') ?></p>
    </div>
  </main>

  <script src="./assets/vendors/@popperjs/popper.min.js"></script>
  <script src="./assets/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="./assets/vendors/fontawesome/all.min.js"></script>
  <script src="./assets/js/theme.js"></script>

  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" />
</body>

</html>
