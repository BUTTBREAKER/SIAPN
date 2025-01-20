<script>
  import venezuelanIcon from "@/assets/images/icons/venezuela.svg";
</script>

<div class="dropdown">
  <button
    class="nav-link btn btn-link dropdown-toggle d-flex align-items-center"
    data-bs-toggle="dropdown"
  >
    <div
      data-bs-toggle="tooltip"
      data-bs-placement="left"
      title="Cambiar idioma"
    >
      <img src={venezuelanIcon} class="img-fluid" alt="Bandera de Venezuela" />
    </div>
  </button>
  <ul
    class="dropdown-menu dropdown-menu-end border-0 shadow-lg p-0 rounded-1"
  >
    <li>
      <button class="dropdown-item d-flex align-items-center gap-3">
        <img src={venezuelanIcon} alt="Bandera de venezuela" />
        Español
      </button>
    </li>
  </ul>
</div>
