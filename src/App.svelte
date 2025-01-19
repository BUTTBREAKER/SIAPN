<script>
  import { Router, Route } from "svelte-routing";
  import Landing from "@/pages/Landing.svelte";
</script>

<Router>
  <Route path="/" component={Landing} />
</Router>
