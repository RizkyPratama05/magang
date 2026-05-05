<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'sigas';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 1. Create table ref_tahun
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS `ref_tahun` (
          `id_tahun` int(11) NOT NULL AUTO_INCREMENT,
          `tahun` varchar(4) NOT NULL,
          `aktif` tinyint(1) DEFAULT 1,
          PRIMARY KEY (`id_tahun`),
          UNIQUE KEY `tahun` (`tahun`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    ");

    // Insert data 2016 - 2030 (Ignore if exist)
    for ($i = 2016; $i <= 2030; $i++) {
        $pdo->exec("INSERT IGNORE INTO `ref_tahun` (`tahun`, `aktif`) VALUES ('$i', 1)");
    }

    // 2. Insert into modules
    // ('settings-tahun', 'SettingsTahun', 'Pengaturan Tahun', 'Pengaturan Master Tahun Aktif', '026;Master Data/', 'calendar', 'calendar', 1, 1, 'tabpanel')
    $pdo->exec("
        INSERT IGNORE INTO `modules` 
        (`module_id`, `module`, `name`, `description`, `menu`, `iconcls`, `icon`, `active`, `onmenu`, `onview`) 
        VALUES 
        ('settings-tahun', 'SettingsTahun', 'Pengaturan Tahun', 'Pengaturan Master Tahun Aktif', '026;Master Data/', 'calendar', 'calendar', 1, 1, 'tabpanel')
    ");

    // 3. Give access to group_id 1 (usually Super Admin) and 'admin' user
    $pdo->exec("INSERT IGNORE INTO `group_has_modules` (`group_id`, `module_id`) VALUES (1, 'settings-tahun')");
    $pdo->exec("INSERT IGNORE INTO `user_has_modules` (`user_id`, `module_id`) VALUES ('admin', 'settings-tahun')");

    echo "SUCCESS: Tabel ref_tahun dan modul SettingsTahun berhasil diregistrasi!\n";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
