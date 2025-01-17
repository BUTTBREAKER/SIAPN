-- Tabla: Negocios
CREATE TABLE negocio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion TEXT,
    telefono VARCHAR(20) NOT NULL CHECK (telefono LIKE '+__________%' OR telefono LIKE '__________'),
    correo VARCHAR(255) NOT NULL CHECK (correo LIKE '%@%'),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla: Usuarios
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    negocio_id INT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) UNIQUE NOT NULL CHECK (correo LIKE '%@%'),
    contrasena VARCHAR(255) NOT NULL,
    rol ENUM('Administrador', 'Empleado', 'Cajero') NOT NULL,
    estado ENUM('Activo', 'Bloqueado') DEFAULT 'Activo',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (negocio_id) REFERENCES negocio(id)
);

-- Tabla: Inventario
CREATE TABLE inventario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    negocio_id INT NOT NULL,
    tipo ENUM('Insumo', 'Producto') NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL DEFAULT 0,
    stock_minimo DECIMAL(10, 2) NOT NULL DEFAULT 0,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (negocio_id) REFERENCES negocio(id)
);

-- Tabla: Ventas
CREATE TABLE venta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    negocio_id INT NOT NULL,
    usuario_id INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    metodo_pago ENUM('Efectivo', 'Tarjeta', 'Transferencia', 'Crédito') NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (negocio_id) REFERENCES negocio(id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

-- Tabla: Detalles de Ventas
CREATE TABLE detalle_venta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    venta_id INT NOT NULL,
    inventario_id INT NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (venta_id) REFERENCES venta(id),
    FOREIGN KEY (inventario_id) REFERENCES inventario(id)
);

-- Tabla: Producción
CREATE TABLE produccion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    negocio_id INT NOT NULL,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    estado ENUM('En Proceso', 'Finalizado') NOT NULL,
    FOREIGN KEY (negocio_id) REFERENCES negocio(id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

-- Tabla: Detalles de Producción
CREATE TABLE detalle_produccion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produccion_id INT NOT NULL,
    inventario_id INT NOT NULL,
    cantidad_usada DECIMAL(10, 2) NOT NULL,
    cantidad_generada DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (produccion_id) REFERENCES produccion(id),
    FOREIGN KEY (inventario_id) REFERENCES inventario(id)
);

-- Tabla: Predicciones
CREATE TABLE prediccion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    negocio_id INT NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    tipo ENUM('producción', 'ventas', 'abastecimiento') NOT NULL,
    estado ENUM('Activa', 'Archivada') DEFAULT 'Activa',
    descripcion TEXT,
    FOREIGN KEY (negocio_id) REFERENCES negocio(id)
);

-- Tabla: Detalles de Predicciones
CREATE TABLE detalle_prediccion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prediccion_id INT NOT NULL,
    inventario_id INT NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL,
    sugerencia TEXT NOT NULL,
    FOREIGN KEY (prediccion_id) REFERENCES prediccion(id),
    FOREIGN KEY (inventario_id) REFERENCES inventario(id)
);

-- Tabla: Sugerencias
CREATE TABLE sugerencia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prediccion_id INT NOT NULL,
    descripcion TEXT NOT NULL,
    estado ENUM('Pendiente', 'Implementado') DEFAULT 'Pendiente',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (prediccion_id) REFERENCES prediccion(id)
);
