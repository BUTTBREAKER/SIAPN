<section id="registro" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 mt-8">
        <h1 class="text-center mb-4">Registra tu Negocio</h1>
        <p class="text-center text-muted mb-5">
          Completa el formulario para registrar tu negocio en nuestra plataforma.
        </p>
        <form action="./registro" method="POST">
          <div class="mb-3">
            <label for="nombre_negocio" class="form-label">Nombre del Negocio</label>
            <input type="text" id="nombre_negocio" name="nombre_negocio" class="form-control" placeholder="Ejemplo: Panadería Delicias" required>
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <textarea id="direccion" name="direccion" class="form-control" placeholder="Ejemplo: Av. Principal #123, Ciudad" required></textarea>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ejemplo: +1234567890" required>
          </div>
          <div class="mb-3">
            <label for="correo_negocio" class="form-label">Correo Electrónico</label>
            <input type="email" id="correo_negocio" name="correo_negocio" class="form-control" placeholder="Ejemplo: negocio@correo.com" required>
          </div>
          <hr class="my-4">
          <h2 class="text-center mb-4">Información del Administrador</h2>
          <div class="mb-3">
            <label for="admin_nombre" class="form-label">Nombre</label>
            <input type="text" id="admin_nombre" name="admin_nombre" class="form-control" placeholder="Tu nombre completo" required>
          </div>
          <div class="mb-3">
            <label for="admin_correo" class="form-label">Correo Electrónico</label>
            <input type="email" id="admin_correo" name="admin_correo" class="form-control" placeholder="Ejemplo: admin@correo.com" required>
          </div>
          <div class="mb-3">
            <label for="admin_contrasena" class="form-label">Contraseña</label>
            <input type="password" id="admin_contrasena" name="admin_contrasena" class="form-control" placeholder="Tu contraseña segura" required>
          </div>
          <div class="mb-3">
            <label for="admin_contrasena_confirm" class="form-label">Confirma tu Contraseña</label>
            <input type="password" id="admin_contrasena_confirm" name="admin_contrasena_confirm" class="form-control" placeholder="Confirma tu contraseña" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Registrar Negocio</button>
        </form>
      </div>
    </div>
  </div>
</section>
