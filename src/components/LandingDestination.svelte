<script>
  import shape from "@/assets/images/category/shape.svg";
  import destinationImage1 from "@/assets/images/dest/dest1.jpg";
  import destinationImage2 from "@/assets/images/dest/dest2.jpg";
  import destinationImage3 from "@/assets/images/dest/dest3.jpg";

  const destinations = [
    {
      imageUrl: destinationImage1,
      title: "Mayor eficiencia",
      description: "Reduce tiempos y optimiza procesos",
    },
    {
      imageUrl: destinationImage2,
      title: "Control total",
      description: "Gestión integral de tu negocio",
    },
    {
      imageUrl: destinationImage3,
      title: "Impulsa el crecimiento",
      description: "Decisiones basadas en datos reales",
    },
  ];
</script>

<section class="pt-5" id="destination">
  <div class="container">
    <div
      class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"
    >
      <img src={shape} />
    </div>
    <div class="mb-7 text-center">
      <h5 class="text-secondary">BENEFICIOS</h5>
      <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive">
        Por qué elegir SIPAN
      </h3>
    </div>
    <div class="row">
      {#each destinations as destination}
        <div class="col-md-4 mb-4">
          <div class="card overflow-hidden shadow">
            <img
              class="card-img-top"
              src={destination.imageUrl}
              alt={destination.title}
            />
            <div class="card-body py-4 px-3">
              <div
                class="d-flex flex-column flex-lg-row justify-content-between mb-3"
              >
                <h4 class="text-secondary fw-medium">{destination.title}</h4>
              </div>
              <div class="d-flex align-items-center">
                <span class="fs-0 fw-medium">{destination.description}</span>
              </div>
            </div>
          </div>
        </div>
      {/each}
    </div>
  </div>
</section>
