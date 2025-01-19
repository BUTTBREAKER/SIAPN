CREATE TABLE negocios (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion TEXT,
    telefono
        VARCHAR(20)
        NOT NULL
        CHECK (telefono LIKE '+__________%' OR telefono LIKE '__________'),
    correo VARCHAR(255) NOT NULL CHECK (correo LIKE '%@%'),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usuarios (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    negocio_id INTEGER NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) UNIQUE NOT NULL CHECK (correo LIKE '%@%'),
    clave VARCHAR(255) NOT NULL,
    rol ENUM('Administrador', 'Empleado', 'Cajero') NOT NULL,
    bloqueado BOOLEAN DEFAULT FALSE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (negocio_id) REFERENCES negocios (id)
);

CREATE TABLE productos (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    negocio_id INTEGER NOT NULL,
    tipo ENUM('Insumo', 'Producto') NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL DEFAULT 0,
    stock_minimo DECIMAL(10, 2) NOT NULL DEFAULT 0,
    fecha_actualizacion
        TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (negocio_id) REFERENCES negocios (id)
);

CREATE TABLE ventas (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    negocio_id INTEGER NOT NULL,
    usuario_id INTEGER NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    metodo_pago ENUM('Efectivo', 'Tarjeta', 'Transferencia', 'Crédito') NOT NULL,
    total DECIMAL(10, 2) NOT NULL,

    FOREIGN KEY (negocio_id) REFERENCES negocios (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
);

CREATE TABLE detalles_venta (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    venta_id INTEGER NOT NULL,
    producto_id INTEGER NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,

    FOREIGN KEY (venta_id) REFERENCES ventas (id),
    FOREIGN KEY (producto_id) REFERENCES productos (id)
);

CREATE TABLE producciones (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    negocio_id INTEGER NOT NULL,
    usuario_id INTEGER NOT NULL,
    fecha DATE NOT NULL,
    finalizado BOOLEAN DEFAULT FALSE,

    FOREIGN KEY (negocio_id) REFERENCES negocios (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
);

CREATE TABLE detalles_produccion (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    produccion_id INTEGER NOT NULL,
    producto_id INTEGER NOT NULL,
    cantidad_usada DECIMAL(10, 2) NOT NULL,
    cantidad_generada DECIMAL(10, 2) NOT NULL,

    FOREIGN KEY (produccion_id) REFERENCES producciones (id),
    FOREIGN KEY (producto_id) REFERENCES productos (id)
);

CREATE TABLE predicciones (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    negocio_id INTEGER NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    tipo ENUM('Producción', 'Ventas', 'Abastecimiento') NOT NULL,
    estado ENUM('Activa', 'Archivada') DEFAULT 'Activa',
    descripcion TEXT,

    FOREIGN KEY (negocio_id) REFERENCES negocios (id)
);

CREATE TABLE detalles_prediccion (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    prediccion_id INTEGER NOT NULL,
    producto_id INTEGER NOT NULL,
    cantidad DECIMAL(10, 2) NOT NULL,
    sugerencia TEXT NOT NULL,

    FOREIGN KEY (prediccion_id) REFERENCES predicciones (id),
    FOREIGN KEY (producto_id) REFERENCES productos (id)
);

CREATE TABLE sugerencias (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    prediccion_id INTEGER NOT NULL,
    descripcion TEXT NOT NULL,
    implementada BOOLEAN DEFAULT FALSE,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (prediccion_id) REFERENCES predicciones (id)
);
