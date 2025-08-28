CREATE DATABASE laporan_edo;

USE laporan_edo;

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255) -- hash bcrypt
);

CREATE TABLE laporan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tanggal DATE,
  deskripsi VARCHAR(255),
  pemasukan INT,
  pengeluaran INT
);
