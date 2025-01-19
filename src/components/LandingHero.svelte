<script>
  import LandingHeroCarousel from "@/components/LandingHeroCarousel.svelte";
  import heroBackground from "@/assets/images/hero/hero-bg.svg";
</script>

<section>
  <div class="bg-holder" style:background-image="url('{heroBackground}')" />

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
        <LandingHeroCarousel />
      </div>

      <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
        <h4 class="fw-bold text-danger mb-3">
          Sistema Integral para Panaderías
        </h4>
        <h1 class="hero-title">
          Optimiza, controla y haz crecer tu panadería con SIPAN
        </h1>
        <p class="mb-4 fw-medium">
          Automatiza tus procesos, controla tu inventario y aumenta tus ventas
          con nuestro sistema integral diseñado específicamente para panaderías.
        </p>
        <div class="text-center text-md-start">
          <a
            class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
            href="#demo"
            role="button"
          >
            Solicitar Demo
          </a>
          <a
            class="btn btn-outline-primary btn-lg"
            href="#features"
            role="button"
          >
            Ver Características
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
