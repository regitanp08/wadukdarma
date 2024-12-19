<?php
$aksi = $_GET['aksi'];

switch($aksi){
    case 'galeri':
        include 'main/galeri.php';
    break;
    case 'kontak':
        include 'main/kontak.php';
    break;
    case 'pesan':
        include 'main/pesan.php';
    break;
    
    default:
        include 'main/beranda.php';
    break;
}

?>