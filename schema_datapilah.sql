-- Skema Database Sistem Matriks Data Pilah SIGA
-- Kompatibel dengan MySQL/MariaDB

-- 1. Tabel Header Matriks (Data Pilah)
DROP TABLE IF EXISTS `data_pilah`;
CREATE TABLE `data_pilah` (
  `id_data_pilah` int(11) NOT NULL AUTO_INCREMENT,
  `judul_data_pilah` text,
  `kode_data_pilah` varchar(255) DEFAULT NULL,
  `aktif` tinyint(4) DEFAULT '1',
  `kode_instansi` varchar(50) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `header_baris` varchar(255) DEFAULT 'Kecamatan/Wilayah',
  PRIMARY KEY (`id_data_pilah`),
  UNIQUE KEY `kode_data_pilah` (`kode_data_pilah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 2. Tabel Definisi Kolom
DROP TABLE IF EXISTS `data_pilah_kolom`;
CREATE TABLE `data_pilah_kolom` (
  `id_data_pilah_kolom` int(11) NOT NULL AUTO_INCREMENT,
  `kode_data_pilah` varchar(255) DEFAULT NULL,
  `header_kolom` varchar(255) DEFAULT NULL,
  `nama_kolom` varchar(255) DEFAULT NULL,
  `kode_kolom` varchar(255) DEFAULT NULL,
  `jml_l` double DEFAULT NULL,
  `jml_p` double DEFAULT NULL,
  `jml_lp` double DEFAULT NULL,
  `tipe_kolom` int(11) DEFAULT NULL COMMENT '1: LP, 2: L+P, 3: L+P+LP',
  `aktif` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_data_pilah_kolom`),
  UNIQUE KEY `kode_kolom` (`kode_kolom`),
  KEY `kode_data_pilah_idx` (`kode_data_pilah`),
  CONSTRAINT `fk_kolom_data_pilah` FOREIGN KEY (`kode_data_pilah`) REFERENCES `data_pilah` (`kode_data_pilah`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 3. Tabel Definisi Baris
DROP TABLE IF EXISTS `data_pilah_baris`;
CREATE TABLE `data_pilah_baris` (
  `id_data_pilah_baris` bigint(20) NOT NULL AUTO_INCREMENT,
  `kode_data_pilah` varchar(255) DEFAULT NULL,
  `no_urut` int(11) DEFAULT NULL,
  `kode_baris` varchar(255) DEFAULT NULL,
  `nama_baris` varchar(255) DEFAULT NULL,
  `aktif` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_data_pilah_baris`),
  UNIQUE KEY `kode_baris` (`kode_baris`),
  KEY `kode_data_pilah_idx` (`kode_data_pilah`),
  CONSTRAINT `fk_baris_data_pilah` FOREIGN KEY (`kode_data_pilah`) REFERENCES `data_pilah` (`kode_data_pilah`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insert Data Default 17 Kecamatan untuk kode_data_pilah '01' sebagai contoh
INSERT INTO `data_pilah_baris` (`kode_data_pilah`, `no_urut`, `kode_baris`, `nama_baris`, `aktif`) VALUES
('01', 1, '01.01', 'Gamping', 1),
('01', 2, '01.02', 'Godean', 1),
('01', 3, '01.03', 'Moyudan', 1),
('01', 4, '01.04', 'Minggir', 1),
('01', 5, '01.05', 'Seyegan', 1),
('01', 6, '01.06', 'Mlati', 1),
('01', 7, '01.07', 'Depok', 1),
('01', 8, '01.08', 'Berbah', 1),
('01', 9, '01.09', 'Prambanan', 1),
('01', 10, '01.10', 'Kalasan', 1),
('01', 11, '01.11', 'Ngemplak', 1),
('01', 12, '01.12', 'Ngaglik', 1),
('01', 13, '01.13', 'Sleman', 1),
('01', 14, '01.14', 'Tempel', 1),
('01', 15, '01.15', 'Turi', 1),
('01', 16, '01.16', 'Pakem', 1),
('01', 17, '01.17', 'Cangkringan', 1);

-- 4. Tabel Sel (Penyimpan Nilai Matriks)
DROP TABLE IF EXISTS `data_pilah_cell`;
CREATE TABLE `data_pilah_cell` (
  `id_data_pilah_cell` bigint(20) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  `kode_data_pilah` varchar(255) DEFAULT NULL,
  `kode_kolom` varchar(255) DEFAULT NULL,
  `kode_baris` varchar(255) DEFAULT NULL,
  `val` double DEFAULT NULL,
  PRIMARY KEY (`id_data_pilah_cell`),
  KEY `kode_data_pilah_idx` (`kode_data_pilah`),
  KEY `kode_kolom_idx` (`kode_kolom`),
  KEY `kode_baris_idx` (`kode_baris`),
  CONSTRAINT `fk_cell_data_pilah` FOREIGN KEY (`kode_data_pilah`) REFERENCES `data_pilah` (`kode_data_pilah`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cell_kolom` FOREIGN KEY (`kode_kolom`) REFERENCES `data_pilah_kolom` (`kode_kolom`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_cell_baris` FOREIGN KEY (`kode_baris`) REFERENCES `data_pilah_baris` (`kode_baris`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

