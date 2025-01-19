<script>
  import shape from "@/assets/images/category/shape.svg";
  import categoryIcon1 from "@/assets/images/category/icon1.png";
  import categoryIcon2 from "@/assets/images/category/icon2.png";
  import categoryIcon3 from "@/assets/images/category/icon3.png";
  import categoryIcon4 from "@/assets/images/category/icon4.png";

  const categories = [
    {
      imageUrl: categoryIcon1,
      title: "Punto de Venta",
      description:
        "Gestiona ventas, facturas y tickets de manera rápida y eficiente.",
    },
    {
      imageUrl: categoryIcon2,
      title: "Control de Inventario",
      description:
        "Seguimiento de materias primas y productos terminados en tiempo real.",
    },
    {
      imageUrl: categoryIcon3,
      title: "Gestión de Producción",
      description: "Planifica tu producción diaria y optimiza tus recetas.",
    },
    {
      imageUrl: categoryIcon4,
      title: "Reportes y Análisis",
      description: "Informes detallados de ventas, costos y rentabilidad.",
    },
  ];
</script>

<section class="pt-5 pt-md-9" id="service">
  <div class="container">
    <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
      <img src={shape} style:max-width={200} />
    </div>
    <div class="mb-7 text-center">
      <h5 class="text-secondary">FUNCIONALIDADES</h5>
      <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive">
        Soluciones completas para tu panadería
      </h3>
    </div>
    <div class="row">
      {#each categories as category}
        <div class="col-lg-3 col-sm-6 mb-6">
          <div
            class="card service-card shadow-hover rounded-3 text-center align-items-center"
          >
            <div class="card-body p-xxl-5 p-4">
              <img src={category.imageUrl} width={75} />
              <h4 class="mb-3">{category.title}</h4>
              <p class="mb-0 fw-medium">{category.description}</p>
            </div>
          </div>
        </div>
      {/each}
    </div>
  </div>
</section>
