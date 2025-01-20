<script>
  import heroImage1 from "@/assets/images/hero/hero-img.png";
  import heroImage2 from "@/assets/images/hero/hero-img2.png";
  import heroImage3 from "@/assets/images/hero/hero-img3.png";

  const heroImages = [heroImage1, heroImage2, heroImage3];
</script>

<div
  id="heroCarousel"
  class="carousel slide carousel-fade"
  data-bs-ride="carousel"
>
  <div class="carousel-inner">
    {#each heroImages as heroImage, index}
      <div class="carousel-item" class:active={!index} data-bs-interval={20}>
        <img
          class="pt-7 pt-md-0 hero-img d-block w-100"
          src={heroImage}
          alt="Chef"
        />
      </div>
    {/each}
  </div>
</div>

<style>
  .carousel-fade .carousel-inner {
    position: relative;
    height: 100%;
  }

  .carousel-fade .carousel-item {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  .carousel-fade .carousel-item.active {
    position: relative;
    opacity: 1;
  }

  .hero-img {
    object-fit: contain;
    height: auto;
    max-height: 500px; /* Ajusta esto según tus necesidades */
  }

  /* Asegura que no haya saltos durante la transición */
  .carousel-inner > .carousel-item {
    display: block;
    -webkit-transform: none;
    transform: none;
  }

  /* Optimización para evitar parpadeos */
  .carousel {
    transform: translateZ(0);
    backface-visibility: hidden;
  }
</style>
