create database tienda_online;
use tienda_online;

create table usuarios(
    id              int(255) auto_increment UNIQUE,
    nombre          varchar(100) not null,
    apellidos       varchar(255),
    email           varchar(255) not null,
    password        varchar(255) not null,
    rol             varchar(20),
    imagen          varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email) 
)ENGINE=InnoDb;

CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

Create table productos(
    id              int(255) auto_increment not null,
    categoria_id    int(255) not null,
    nombre          varchar(100) not null,
    descripcion     text,
    precio          float(100,2) not null,
    stock           int(255) not null,
    oferta          varchar(2),
    fecha           date not null,
    imagen          varchar(255),
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

create table direcciones(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    pais            varchar(100) not null,
    provincia       varchar(100) not null,
    localidad       varchar(100) not null,
    calle           varchar(100) not null,
    numero          int(100) not null,
    info            varchar(255) null,
    codigo_postal   int(100) not null,
    CONSTRAINT pk_direcciones PRIMARY KEY(id),
    CONSTRAINT fk_direccion_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

create TABLE pedidos(
    id              int(255) auto_increment not null,
    direccion_id    int(255) not null,
    usuario_id      int(255) not null,
    coste           int(255) not null,
    estado          varchar(100) not null,
    fecha           date not null,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedido_direccion FOREIGN KEY(direccion_id) REFERENCES direcciones(id),
    CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;