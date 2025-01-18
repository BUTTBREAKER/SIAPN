<div class="container">
  <h1 class="text-center">Registra tu Negocio</h1>
  <p class="text-center text-muted">
    Completa el formulario para registrar tu negocio en nuestra plataforma.
  </p>
  <form action="./registro" class="row row-cols-lg-2" method="post">
    <section class="col d-grid gap-3">
      <h2 class="text-center">Información del Negocio</h2>
      <div>
        <label for="nombre_negocio" class="form-label">Nombre del Negocio</label>
        <input
          id="nombre_negocio"
          name="nombre_negocio"
          class="form-control"
          placeholder="Ejemplo: Panadería Delicias"
          required />
      </div>
      <div>
        <label for="direccion" class="form-label">Dirección</label>
        <textarea
          id="direccion"
          name="direccion"
          class="form-control"
          placeholder="Ejemplo: Av. Principal #123, Ciudad"
          required></textarea>
      </div>
      <div>
        <label for="telefono" class="form-label">Teléfono</label>
        <input
          type="tel"
          id="telefono"
          name="telefono"
          class="form-control"
          placeholder="Ejemplo: +1234567890"
          required />
      </div>
      <div>
        <label for="correo_negocio" class="form-label">Correo Electrónico</label>
        <input
          type="email"
          id="correo_negocio"
          name="correo_negocio"
          class="form-control"
          placeholder="Ejemplo: negocio@correo.com"
          required />
      </div>
    </section>
    <section class="col d-grid gap-3">
      <h2 class="text-center">Información del Administrador</h2>
      <div>
        <label for="admin_nombre" class="form-label">Nombre</label>
        <input
          id="admin_nombre"
          name="admin_nombre"
          class="form-control"
          placeholder="Tu nombre completo"
          required />
      </div>
      <div>
        <label for="admin_correo" class="form-label">Correo Electrónico</label>
        <input
          type="email"
          id="admin_correo"
          name="admin_correo"
          class="form-control"
          placeholder="Ejemplo: admin@correo.com"
          required />
      </div>
      <div>
        <label for="admin_contrasena" class="form-label">Contraseña</label>
        <input
          type="password"
          id="admin_contrasena"
          name="admin_contrasena"
          class="form-control"
          placeholder="Tu contraseña segura"
          required
          onchange="document.querySelector('#admin_contrasena_confirm').setAttribute('pattern', this.value)" />
      </div>
      <div>
        <label for="admin_contrasena_confirm" class="form-label">Confirma tu Contraseña</label>
        <input
          type="password"
          id="admin_contrasena_confirm"
          name="admin_contrasena_confirm"
          class="form-control"
          placeholder="Confirma tu contraseña"
          required
          title="Las contraseñas deben ser iguales" />
      </div>
    </section>
    <footer class="col-lg-12 text-center">
      <button class="btn btn-primary">Registrar Negocio</button>
      <button type="reset" class="btn btn-outline-dark">Limpiar</button>
    </footer>
  </form>
</div>
