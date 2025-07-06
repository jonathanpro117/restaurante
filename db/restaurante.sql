
CREATE DATABASE IF NOT EXISTS restaurante;
USE restaurante;

-- Tabla de pedidos
CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    documento VARCHAR(20),
    tipo_documento VARCHAR(20),
    nombre_completo VARCHAR(100),
    celular VARCHAR(15),
    correo VARCHAR(100),
    menu_seleccionado VARCHAR(50),
    mesa_opcion VARCHAR(20),
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    clave_hash VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'mesero') DEFAULT 'mesero'
);

-- Usuario admin de prueba (clave: admin123)
INSERT INTO usuarios (usuario, clave_hash, rol)
VALUES ('admin', '$2y$10$BCt/0MoOfzxn2rg1ZcqVQeE6ATSKdD6UqMKM2pR9VzO1bW0mDWpIi', 'admin');
