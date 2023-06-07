CREATE DATABASE db_hunter;
USE db_hunter;
CREATE TABLE tb_invoice(  
    n_bill int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    bill_date DATE NOT NULL,
    Seller VARCHAR(255) NOT NULL,
    identification INT(11) NOT NULL,
    full_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    pone VARCHAR(15) NOT NULL
) COMMENT 'Tabla de recolecion de datos del proyecto';