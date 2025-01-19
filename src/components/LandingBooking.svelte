<script>
  import selection from "@/assets/images/steps/selection.svg";
  import waterSport from "@/assets/images/steps/water-sport.svg";
  import taxi from "@/assets/images/steps/taxi.svg";
  import bookingImg from "@/assets/images/steps/booking-img.jpg";
</script>

<section id="booking">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="mb-4 text-start">
          <h5 class="text-secondary">Simple y Rápido</h5>
          <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive">
            Comienza a usar SIPAN en 3 pasos
          </h3>
        </div>
        <div class="d-flex align-items-start mb-5">
          <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px">
            <img src={selection} width="22" alt="steps" />
          </div>
          <div class="flex-1">
            <h5 class="text-secondary fw-bold fs-0">Solicita una Demo</h5>
            <p>
              Conoce todas las funcionalidades de SIPAN con una demostración
              personalizada.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-5">
          <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px">
            <img src={waterSport} width="22" alt="steps" />
          </div>
          <div class="flex-1">
            <h5 class="text-secondary fw-bold fs-0">Configuración Inicial</h5>
            <p>
              Configuramos el sistema según las necesidades específicas de tu
              panadería.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-5">
          <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px">
            <img src={taxi} width="22" alt="steps" />
          </div>
          <div class="flex-1">
            <h5 class="text-secondary fw-bold fs-0">Capacitación y Soporte</h5>
            <p>
              Te acompañamos en la implementación con capacitación completa y
              soporte continuo.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex justify-content-center align-items-start">
        <div class="card position-relative shadow" style="max-width: 370px;">
          <div class="card-body p-3">
            <img
              class="mb-4 mt-2 rounded-2 w-100"
              src={bookingImg}
              alt="demo"
            />
            <div>
              <h5 class="fw-medium">Demo Gratuita</h5>
              <p class="fs--1 mb-3 fw-medium">Conoce SIPAN en acción</p>
              <div class="d-flex align-items-center justify-content-between">
                <button class="btn btn-primary">Solicitar Ahora</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
