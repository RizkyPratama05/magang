<?php
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['SERVER_ADDR'] = '127.0.0.1';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

$_POST['action'] = null;
$_POST['show_data'] = 1;
$_POST['kode_data_pilah'] = '01'; // kode NTCR Wali dari screenshot?
$_POST['tahun'] = '2021';
require 'public-service.php';
