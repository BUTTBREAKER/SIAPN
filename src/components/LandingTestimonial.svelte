<script>
  import author1 from "@/assets/images/testimonial/author.png";
  import author2 from "@/assets/images/testimonial/author2.png";
  import author3 from "@/assets/images/testimonial/author3.png";

  const authors = [
    {
      imageUrl: author1,
      name: "Carlos Ramírez",
      company: "Panadería La Espiga Dorada",
      testimonial:
        "SIPAN transformó completamente la gestión de mi panadería. Ahora tengo control total sobre el inventario y las ventas.",
    },
    {
      imageUrl: author2,
      name: "María González",
      company: "Panificadora San José",
      testimonial:
        "El sistema es muy intuitivo y el soporte técnico es excelente. Ha mejorado significativamente nuestra productividad.",
    },
    {
      imageUrl: author3,
      name: "Roberto Sánchez",
      company: "Panadería El Horno Feliz",
      testimonial:
        "La implementación fue rápida y la capacitación muy completa. SIPAN es exactamente lo que necesitábamos.",
    },
  ];
</script>

<section id="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="mb-8 text-start">
          <h5 class="text-secondary">Testimonios</h5>
          <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive">
            Lo que dicen nuestros clientes
          </h3>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div
          class="carousel slide carousel-fade position-static"
          id="testimonialIndicator"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            {#each Object.keys(authors).map(Number) as index}
              <button
                class:active={!index}
                type="button"
                data-bs-target="#testimonialIndicator"
                data-bs-slide-to={index}
              />
            {/each}
          </div>
          <div class="carousel-inner">
            {#each authors as author, index}
              <div
                class="carousel-item position-relative"
                class:active={!index}
              >
                <div class="card shadow" style="border-radius:10px;">
                  <div class="position-absolute start-0 top-0 translate-middle">
                    <img
                      class="rounded-circle fit-cover"
                      src={author.imageUrl}
                      height="65"
                      width="65"
                      alt=""
                    />
                  </div>
                  <div class="card-body p-4">
                    <p class="fw-medium mb-4">{author.testimonial}</p>
                    <h5 class="text-secondary">{author.name}</h5>
                    <p class="fw-medium fs--1 mb-0">{author.company}</p>
                  </div>
                </div>
              </div>
            {/each}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
