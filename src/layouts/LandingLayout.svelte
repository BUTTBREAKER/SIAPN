<script lang="ts">
  import "@fontsource/poppins";
  import "@fontsource/volkhov";
  import "@fortawesome/fontawesome-free/js/all.min.js";
  import "bootstrap/dist/js/bootstrap.bundle.min.js";
  import "@/styles/theme.css";
  import favicon from "@/assets/images/favicon.png";
  import { onMount } from "svelte";
  import { Tooltip } from "bootstrap";
  import LandingNavbar from "@/components/LandingNavbar.svelte";
  import LandingFooter from "@/components/LandingFooter.svelte";

  export let title: string;

  onMount(() => {
    const nodes = document.querySelectorAll('[data-bs-toggle="tooltip"]');

    nodes.forEach((node) => new Tooltip(node));
  });
</script>

<svelte:head>
  <title>{title} ~ SIPAN</title>
  <link rel="icon" href={favicon} />
</svelte:head>

<LandingNavbar />
<slot />
<LandingFooter />
