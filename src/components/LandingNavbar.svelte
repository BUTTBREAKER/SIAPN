<script>
  import { Link } from "svelte-routing";
  import logo from "@/assets/images/logo.png";
  import venezuelanIcon from "@/assets/images/icons/venezuela.svg";
</script>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container">
    <Link
      class="navbar-brand"
      to="./"
      data-bs-toggle="tooltip"
      title="Sistema Integral para Panaderías"
    >
      <img src={logo} height="64" />
    </Link>
    <button
      class="navbar-toggler"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <hr class="d-lg-none" />
      <ul class="navbar-nav ms-auto gap-3 align-items-lg-center">
        <li>
          <a class="nav-link" href="#service">Service</a>
        </li>
        <li>
          <a class="nav-link" href="#destination">Destination</a>
        </li>
        <li>
          <a class="nav-link" href="#booking">Booking</a>
        </li>
        <li>
          <a class="nav-link" href="#testimonial">Testimonial</a>
        </li>
        <li>
          <div class="btn-group">
            <Link class="btn btn-outline-dark" to="/ingresar">
              Iniciar sesión
            </Link>
            <Link class="btn btn-outline-dark" to="/registrarse">
              Registrarse
            </Link>
          </div>
        </li>
        <li class="dropdown">
          <button
            class="nav-link btn btn-link dropdown-toggle d-flex align-items-center"
            data-bs-toggle="dropdown"
          >
            <div
              data-bs-toggle="tooltip"
              data-bs-placement="left"
              title="Cambiar idioma"
            >
              <img src={venezuelanIcon} class="img-fluid" />
            </div>
          </button>
          <ul
            class="dropdown-menu dropdown-menu-end border-0 shadow-lg p-0 rounded-1 overflow-hidden"
          >
            <li>
              <a
                class="dropdown-item d-flex align-items-center gap-3"
                href="javascript:"
              >
                <img src={venezuelanIcon} />
                Español
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar {
    backdrop-filter: blur(1rem);
  }

  img[src$=".svg"] {
    width: 2em;
    height: 2em;
    object-fit: cover;
    object-position: center;
  }
</style>
