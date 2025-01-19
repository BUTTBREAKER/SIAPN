<script>
  import { Router, Route } from "svelte-routing";
  import Landing from "@/pages/Landing.svelte";
  import Register from "@/pages/Register.svelte";
  import Login from "@/pages/Login.svelte";
</script>

<Router>
  <Route path="/" component={Landing} />
  <Route path="/ingresar" component={Login} />
  <Route path="/registrarse" component={Register} />
</Router>
