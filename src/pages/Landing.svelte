<script>
  import LandingLayout from "@/layouts/LandingLayout.svelte";
  import LandingHeroCarousel from "@/components/LandingHeroCarousel.svelte";
  import LandingHero from "@/components/LandingHero.svelte";
  import LandingServices from "@/components/LandingServices.svelte";
  import LandingDestination from "@/components/LandingDestination.svelte";
  import LandingBooking from "@/components/LandingBooking.svelte";
  import LandingTestimonial from "@/components/LandingTestimonial.svelte";
</script>

<LandingLayout title="Inicio">
  <LandingHero />
  <LandingServices />
  <LandingDestination />
  <LandingBooking />
  <LandingTestimonial />
</LandingLayout>
